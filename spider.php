<?php
/**
 * @copyright  Copyright (C) 2014. All rights reserved.
 * @license    GNU General Public License version 2 or later; see LICENSE
 */

/**
 * The Spider4Schema logic
 */

include_once 'configuration.php';
include_once 'http.php';
include_once 'parser.php';
include_once 'fileCreator.php';

// Initialize the HTTP object
$http = new Http;

// Retrieve the HTML containing all available Types
$html = $http->httpRequest('https://schema.org/docs/full.html');

// Retrieve all available Types
$types = parseTypes($html['file']);

if (DEBUG)
	echo "Started Spider4Schema \n";

// Create the minified Library
if (CREATE_LIBRARY === 'minified')
{
	// For each Type retrieve all available Properties and information
	foreach ($types as $typeName)
	{
		if (DEBUG)
			echo "\n------------------------------------------------------------\n"
				. "Creating array type: $typeName \n";

		// Retrieve the Type HTML
		$type = $http->httpRequest('http://schema.org/' . $typeName);
		$type = parseType($type['file'], $typeName);
		$types[$typeName] = $type;

		// Wait some time, to not DDOS the Schema.org website
		sleep(rand(0, 1));
	}

	if (DEBUG)
		echo "\nCreating all Types class \n";

	createAllTypesClass($types, dirname(__FILE__) . '/libraries');
}

// Create the normal Type library
if (CREATE_LIBRARY === 'normal')
{
	// For each Type retrieve all available Properties and information
	foreach ($types as $typeName)
	{
		if (DEBUG)
			echo "\n------------------------------------------------------------\n"
			. "Creating array type: $typeName \n";

		// Retrieve the Type HTML
		$type = $http->httpRequest('http://schema.org/' . $typeName);
		$type = parseType($type['file'], $typeName);

		if (DEBUG)
			echo "\nCreating Types class: \n";

		createTypeClass($typeName, $type, dirname(__FILE__) . '/libraries/type');

		// Wait some time, to not DDOS the Schema.org website
		sleep(rand(0, 1));
	}
}

// Create the JSON Library
if (CREATE_LIBRARY === 'json')
{
	// For each Type retrieve all available Properties and information
	foreach ($types as $typeName)
	{
		if (DEBUG)
			echo "\n------------------------------------------------------------\n"
				. "Creating array type: $typeName \n";

		// Retrieve the Type HTML
		$type = $http->httpRequest('http://schema.org/' . $typeName);
		$type = parseType($type['file'], $typeName);
		$types[$typeName] = $type;

		// Wait some time, to not DDOS the Schema.org website
		sleep(rand(0, 1));
	}

	if (DEBUG)
		echo "\nCreating the JSON file library \n";

	createJSONLibrary($types, dirname(__FILE__) . '/libraries');
}
