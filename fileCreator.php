<?php
/**
 * 
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

	// Create the Properties array
	$typeProperties = "";

	foreach ($types as $typeName => $type)
	{
		if (is_array($type))
		{
			// Control if the Type has Properties
			if ($type['properties'])
			{
				foreach ($type['properties'] as $properyName => $propertyInfo)
				{
					$typeProperties .= "\n\t\t\t\t'$properyName' => array(\n"
						. "\t\t\t\t\t'expectedTypes' => array('" . join("', '", $propertyInfo['expectedTypes']) . "')"
						. "\n\t\t\t\t),";
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
	$code =
'<?php
/**
 *
 *
 */
class Types
{
	/**
	 * An array with all available Types and information
	 *
	 * @var	array
	 */
	protected $types = array(
' . $typesArray . '
	);
}
';

	// Write the class file and close the handle
	fwrite($handle, $code);
	fclose($handle);

	// Debug
	if (DEBUG)
		echo "Created the $fileName file \n";
}
