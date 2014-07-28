<?php
/**
 * A set of functions to parse the retrieved HTML and find the needed information
 * 
 * @copyright  Copyright (C) 2013 - 2014 P.Alex (Alexandru Pruteanu)
 * @license    Licensed under the MIT License; see LICENSE
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

		$types[$type] = removeSpaces($type);
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
 * @param   DOMXPath  $xpath  The Document object where to search
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

	return removeSpaces($comment);
}

/**
 * Retrieve the Type inherence if available
 * 
 * @param   DOMXPath  $xpath  The Document object where to search
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
	$types = explode('>', $tmpExtends);

	if (count($types) > 1)
	{
		return removeSpaces($types[count($types) - 2]);
	}

	return '';
}

/**
 * Retrieve all available Properties of a given Type
 * 
 * @param   DOMXPath  $xpath     The Document object where to search
 * @param   string    $typeName  The Type name
 * 
 * @return	array
 */
function parseTypeProperties(DOMXPath $xpath, $typeName)
{
	// Control if properties available
	$nodeList = $xpath->query("(//thead[@class='supertype'])//a");

	// Return an empty array if there isn't any available property
	if (!$nodeList->length || ($nodeList->item(0)->nodeValue != $typeName))
		return array();

	// Retrieve all Type Properties
	$nodeList = $xpath->query("(//tbody[@class='supertype'])[1]/tr");

	$properties = array();

	foreach ($nodeList as $node)
	{
		$values = array();
		$childNodes = $node->childNodes;

		// Retrieve all available information
		foreach ($childNodes as $node)
		{
			if ($value = removeSpaces($node->nodeValue))
				$values[] = $value;
		}

		$expectedTypes = explode(' or ', $values[1]);

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

/**
 * Remove white spaces from a string
 *
 * @param  $string  The string to sanitize
 *
 * @return string
 */
function removeSpaces($string)
{
	/* Remove multiple occurences of whitespace characters
	 * in a string an convert them all into single spaces.
	 * Also remove &nbsp; */
	$string = preg_replace(array('/' . chr(0xC2) . chr(0xA0) . '/', '/\s+/'), ' ', $string);

	return trim($string);
}
