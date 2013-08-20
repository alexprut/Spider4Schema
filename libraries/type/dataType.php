<?php
/**
 * The basic data types such as Integers, Strings, etc.
 *
 * @see    http://schema.org/DataType
 * @since  1.0
*/
abstract class TypeDataType
{
	/**
	 * The Schema.org Type Scope
	 *
	 * @var string
	 */
	protected static $scope = 'https://schema.org/DataType';

	/**
	 * Return the Type Scope
	 *
	 * @return string
	 *
	 * @since   13.1
	 */
	public static function scope()
	{
		return static::$scope;
	}

	/**
	 * Return the Property value
	 *
	 * @param   array  $property  The Property to process
	 *
	 * @return  string
	 */
	protected static function getValue($property)
	{
		return $property['value'];
	}

	/**
	 * Return the Type name
	 * example: Thing
	 *
	 * @return	string
	 */
	public static function name()
	{
		// 4 is where the 'Type' word ends in the class name
		return substr(get_called_class(), 4);
	}

	/**
	 * Return an array with all available Properties of the Type
	 *
	 * @return  array
	 */
	public static function getProperties()
	{
		// Reference http://php.net/manual/en/reflectionclass.getstaticproperties.php
		// Retrive all the Properties from this class Type
		$class = new ReflectionClass(get_called_class());

		$tmpProperties = $class->getStaticProperties();
		$properties = array();

		foreach ($tmpProperties as $property)
		{
			if (is_array($property))
			{
				array_push($properties, self::getValue($property));
			}
		}

		return $properties;
	}

	/**
	 * Return the expected types of the Property
	 *
	 * @param   string  $property  The Property to process
	 *
	 * @return  array
	 */
	public static function getExpectedTypes($property)
	{
		if (is_array($property))
		{
			return $property['expectedTypes'];
		}

		$expectedTypes = static::$$property;

		return $expectedTypes['expectedTypes'];
	}
}
