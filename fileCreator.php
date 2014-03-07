<?php
/**
 * Methods to create the library classes
 * 
 * @copyright  Copyright (C) 2014. All rights reserved.
 * @license    GNU General Public License version 2 or later; see LICENSE
 */

/**
 * Creates a minified class file with all Types
 * 
 * @param   array   $types  An array with all available Types
 * @param   string  $path   The path where to create the file
 * 
 * @return  void
*/
function createAllTypesClass($types, $path)
{
	// Create the new file
	$fileName = 'types.php';
	$handle = fopen($path . '/' . $fileName, 'w');

	// Creating the $typesArray
	$typesArray = '';

	foreach ($types as $typeName => $type)
	{
		// Create the Properties array
		$typeProperties = "";

		if (is_array($type))
		{
			// Control if the Type has Properties
			if ($type['properties'])
			{
				foreach ($type['properties'] as $properyName => $propertyInfo)
				{
					$typeProperties .= "\n\t\t\t\t'$properyName' => array('" . join("', '", $propertyInfo['expectedTypes']) . "'),";
				}

				// Sanitize $typeProperties, remove ','
				$typeProperties = substr($typeProperties, 0, -1) . "\n\t\t\t";
			}

			// Create all Type information and Properties array
			$typeInfo = "array(\n"
				. "\t\t\t'extends' => '" . $type['extends'] . "',\n"
				. "\t\t\t'properties' => array(" . $typeProperties . ")\n"
				. "\t\t),\n";
		}
		else
		{
			$typeInfo = "array(),\n";
		}

		$typesArray .= "\t\t'" . $typeName . "' => $typeInfo";
	}

	// Sanitize $typesArray, remove ',\n'
	$typesArray = substr($typesArray, 0, -2);

	// The final class code
	$code = "<?php\n"
		. "class Types\n"
		. "{\n"
		. "\t/**\n"
		. "\t * An array with all available Types and information\n"
		. "\t *\n"
		. "\t * @var	array\n"
		. "\t */\n"
		. "\tprotected \$types = array(\n"
		. $typesArray
		. "\n\t);\n"
		. "}\n";

	// Write the class file and close the handle
	fwrite($handle, $code);
	fclose($handle);

	// Debug
	if (DEBUG)
		echo "Created the $fileName file \n";
}

/**
 * Creates a minified class file with all Types
 *
 * @param   string  $typeName  The name of the Type
 * @param   array   $type      An array with all information about the Type
 * @param   string  $path      The path where to create the file
 *
 * @return  void
 */
function createTypeClass($typeName, $type, $path)
{
	// FIXME Add getName(), scope() and other default functions to Thing and Date Type
	// Create the new file
	$fileName = lcfirst($typeName) . '.php';
	$handle = fopen($path . '/' . $fileName, 'w');

	// Create the Properties variables
	$typeProperties = "";

	// Create the Properties methods code
	$propertiesMethods = "";

	foreach ($type['properties'] as $propertyName => $propertyInfo)
	{
		// Create the class variables
		$typeProperties .= "\n\n\t/**\n"
			. "\t * " . $propertyInfo['description'] . "\n"
			. "\t * Expected Type: " . join(", ", $propertyInfo['expectedTypes']) . "\n"
			. "\t * \n"
			. "\t * @var	array\n"
			. "\t */\n"
			. "\tprotected static $" . lcfirst($propertyName) . " = array('value' => '$propertyName',\n"
			. "\t\t'expectedTypes' => array('" . join("', '", $propertyInfo['expectedTypes']) . "')\n"
			. "\t);";

		// Create the class functions
		$propertiesMethods .= "\n\n\t/**\n"
			. "\t * Return the '$propertyName' Property value\n"
			. "\t *\n"
			. "\t * @return	string\n"
			. "\t */\n"
			. "\tpublic static function p" . ucfirst($propertyName) . "()\n"
			. "\t{\n"
			. "\t\treturn self::getValue(self::\$$propertyName);\n"
			. "\t}";
	}

	// Create the extends part
	if ($type['extends'])
		$extends = ' extends ' . ucfirst(CLASS_PREFIX) . $type['extends'];
	else
		$extends = '';

	// The final class code
	$code = "<?php\n"
		. "/**\n"
		. " * " . $type['comment'] . "\n"
		. " *\n"
		. " * @see    http://schema.org/" . ucfirst($typeName) . "\n"
		. "*/\n"
		. "abstract class " . ucfirst(CLASS_PREFIX) . ucfirst($typeName) . $extends . "\n"
		. "{\n"
		. "\t/**\n"
		. "\t * The Schema.org Type Scope\n"
		. "\t *\n"
		. "\t * @var string\n"
		. "\t */\n"
		. "\tprotected static \$scope = 'https://schema.org/" . ucfirst($typeName) . "';"
		. $typeProperties
		. $propertiesMethods
		. "\n}\n";

	// Write the class file and close the handle
	fwrite($handle, $code);
	fclose($handle);

	// Debug
	if (DEBUG)
		echo "Created $fileName library file \n";
}

/**
 * Creates a JSON file with all Types
 *
 * @param   array   $types  An array with all available Types
 * @param   string  $path   The path where to create the file
 *
 * @return  void
 */
function createJSONLibrary($types, $path)
{
	// Create the new file
	$fileName = 'types.json';
	$handle = fopen($path . '/' . $fileName, 'w');

	// Remove comments from the $types array
	foreach ($types as &$type)
	{
		unset($type['comment']);

		foreach ($type['properties'] as &$property)
		{
			unset($property['description']);
		}
	}

	$code = json_encode($types);

	// Write the class file and close the handle
	fwrite($handle, $code);
	fclose($handle);

	// Debug
	if (DEBUG)
		echo "Created the $fileName file \n";
}
