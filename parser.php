<?php
/**
 * Retrieve all available Types
 * 
 * @param string $html
 */
function parseTypes($html)
{
	// Create a new DOMDocument
	$doc = new DOMDocument();
	$doc->loadHTML($html);
	
	// Create a new DOMXPath, to make XPath queries
	$xpath = new DOMXPath($doc);
	
	$nodeList = $xpath->query( "//td[@class='tc']/a");
	
	$types = array();
	foreach($nodeList as $node)
	{
		// Sanitize the Type
		$types[] = str_replace('*', '', $node->nodeValue);
	}
	
	return $types;
}

/**
 * Retrieve all available information about that Type
 * 
 * @param string $html
 */
function parseType($html, $typeName)
{
	// Create a new DOMDocument
	$doc = new DOMDocument();
	$doc->loadHTML($html);
	
	// Create a new DOMXPath, to make XPath queries
	$xpath = new DOMXPath($doc);
	
	// TODO If there is no comment
	// TODO If there are no properties available
	$type['comment']	= parseTypeComment($xpath);
	$type['extends']	= parseTypeExtends($xpath);
	$type['properties']	= parseTypeProperties($xpath, $typeName);
	
	return $type;
}

/**
 * Retrieve the Type comment
 * 
 * @param string $html
 */
function parseTypeComment(DOMXPath $xpath)
{	
	$nodeList = $xpath->query( "//div[@property='rdfs:comment']");
	
	foreach($nodeList as $node)
	{
		$comment = $node->nodeValue;
	}
	
	return $comment;
}

/**
 * Retrieve the Type inherence Type if available
 * 
 * @param string $html
 */
function parseTypeExtends(DOMXPath $xpath)
{
	$nodeList = $xpath->query( "//h1[@class='page-title']");
	
	foreach($nodeList as $node)
	{
		$tmpExtends = $node->nodeValue;
	}
	
	// Search for the Extended Type if available
	$types = explode('>', trim($tmpExtends));
	
	if(count($types) > 1)
	{
		return trim($types[count($types)-2]);
	}
	
	return null;
}

function parseTypeProperties(DOMXPath $xpath, $typeName)
{
	// Control if properties available
	$nodeList = $xpath->query("(//thead[@class='supertype'])[last()]//a");
	
	foreach ($nodeList as $node)
	{
		// Return null if there is no property available
		if ($node->nodeValue != $typeName)
			return null;
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
			if($value = trim($node->nodeValue))
				$values[] = $value;
		}
		
		// Create an array with the expected Types and sanitize
		$expectedTypes = preg_replace( '/\s+/', '', $values[1]);
		$expectedTypes = explode('or', $expectedTypes);

		// Create the final $property
		$properties[$values[0]] = array(
			'expectedTypes' => $expectedTypes,
			'description' => $values[2]
		);
	}

	if (empty($properties))
		return null;
	
	return $properties;
}