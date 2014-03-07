<?php
/**
 * A set of functions to parse the retrieved HTML and find the needed information
 * 
 * @copyright  Copyright (C) 2014. All rights reserved.
 * @license    GNU General Public License version 2 or later; see LICENSE
 */

/**
 * Retrieve all available Types
 * 
 * @param   string  $html  The retrieved HTML from the Type page
 * 
 * @return	array
 */
function parseTypes($html)
{
	// Create a new DOMDocument
	$doc = new DOMDocument;
	$doc->loadHTML($html);

	// Create a new DOMXPath, to make XPath queries
	$xpath = new DOMXPath($doc);

	$nodeList = $xpath->query("//td[@class='tc']/a");

	$types = array();

	foreach ($nodeList as $node)
	{
		// Sanitize the Type
		$type = str_replace('*', '', $node->nodeValue);

		$types[$type] = $type;
	}

	// Debug
	if (DEBUG)
		echo "Retrieved types: " . count($types) . "\n";

	return $types;
}

/**
 * Retrieve all available information about that Type
 * such as comment, inherences and properties
 * 
 * @param   string  $html      The retrieved HTML from the Type page
 * @param   string  $typeName  The Type name
 * 
 * @return  array
 */
function parseType($html, $typeName)
{
	// Debug
	if (DEBUG)
		echo "HTML parsing type: $typeName\n";

	// Create a new DOMDocument
	$doc = new DOMDocument;
	$doc->loadHTML($html);

	// Create a new DOMXPath, to make XPath queries
	$xpath = new DOMXPath($doc);

	$type['comment']	= parseTypeComment($xpath);
	$type['extends']	= parseTypeExtends($xpath);
	$type['properties']	= parseTypeProperties($xpath, $typeName);

	// Debug
	if (DEBUG === 'verbose')
		var_dump($type);

	return $type;
}

/**
 * Retrieve the Type comment
 * 
 * @param   string  $xpath  The Document object where to search
 * 
 * @return	string
 */
function parseTypeComment(DOMXPath $xpath)
{
	$nodeList = $xpath->query("//div[@property='rdfs:comment']");

	$comment = '';

	foreach ($nodeList as $node)
	{
		$comment = $node->nodeValue;
	}

	return $comment;
}

/**
 * Retrieve the Type inherence if available
 * 
 * @param   string  $xpath  The Document object where to search
 * 
 * @return	string
 */
function parseTypeExtends(DOMXPath $xpath)
{
	$nodeList = $xpath->query("//h1[@class='page-title']");

	foreach ($nodeList as $node)
	{
		$tmpExtends = $node->nodeValue;
	}

	// Search for the Extended Type if available
	$types = explode('>', trim($tmpExtends));

	if (count($types) > 1)
	{
		return trim($types[count($types) - 2]);
	}

	return '';
}

/**
 * Retrieve all available Properties of a given Type
 * 
 * @param   object  $xpath     The Document object where to search
 * @param   string  $typeName  The Type name
 * 
 * @return	array
 */
function parseTypeProperties(DOMXPath $xpath, $typeName)
{
	// Control if properties available
	$nodeList = $xpath->query("(//thead[@class='supertype'])[last()]//a");

	foreach ($nodeList as $node)
	{
		// Return null if there is no property available
		if ($node->nodeValue != $typeName)
			return array();
	}

	// Retrieve all Type Properties
	$nodeList = $xpath->query("(//tbody[@class='supertype'])[last()]/tr");

	$properties = array();

	foreach ($nodeList as $node)
	{
		$values = array();
		$childNodes = $node->childNodes;

		// Retrive all available information
		foreach ($childNodes as $node)
		{
			if ($value = trim($node->nodeValue))
				$values[] = $value;
		}

		// Create an array with the expected Types and sanitize
		$expectedTypes = preg_replace('/\s+/', ' ', $values[1]);
		$expectedTypes = explode(' or ', trim($expectedTypes));

		// Create the final $property
		$properties[$values[0]] = array(
			'expectedTypes' => $expectedTypes,
			'description' => $values[2]
		);
	}

	if (empty($properties))
		return array();

	return $properties;
}
