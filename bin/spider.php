<?php
/**
 * @copyright  Copyright (C) 2013 - 2014 P.Alex (Alexandru Pruteanu)
 * @license    Licensed under the MIT License; see LICENSE
 */

/**
 * The Spider4Schema logic
 */

require_once dirname(__FILE__) . DIRECTORY_SEPARATOR . '../src/configuration.php';
require_once dirname(__FILE__) . DIRECTORY_SEPARATOR . '../src/http.php';
require_once dirname(__FILE__) . DIRECTORY_SEPARATOR . '../src/parser.php';
require_once dirname(__FILE__) . DIRECTORY_SEPARATOR . '../src/fileCreator.php';

// Initialize the HTTP object
$http = new Http;

// Disable frontend error reporting
libxml_use_internal_errors(true);

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

	createAllTypesClass($types, dirname(__FILE__) . '/../dist');
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

		createTypeClass($typeName, $type, dirname(__FILE__) . '/../dist/type');

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

	createJSONLibrary($types, dirname(__FILE__) . '/../dist');
}
