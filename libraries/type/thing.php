<?php
/**
 * The most generic type of item.
 *
 * @see    http://schema.org/Thing
 * @since  1.0
*/
abstract class TypeThing
{
	/**
	 * The Schema.org Type Scope
	 *
	 * @var string
	 */
	protected static $scope = 'https://schema.org/Thing';

	/**
	 * An additional type for the item, typically used for adding more specific types from external vocabularies in microdata syntax. This is a relationship between something and a class that the thing is in. In RDFa syntax, it is better to use the native RDFa syntax - the 'typeof' attribute - for multiple types. Schema.org tools may have only weaker understanding of extra types, in particular those defined externally.
	 * Expected Type: URL
	 * 
	 * @var	array
	 */
	protected static $additionalType = array('value' => 'additionalType',
		'expectedTypes' => array('URL')
	);

	/**
	 * A short description of the item.
	 * Expected Type: Text
	 * 
	 * @var	array
	 */
	protected static $description = array('value' => 'description',
		'expectedTypes' => array('Text')
	);

	/**
	 * URL of an image of the item.
	 * Expected Type: URL
	 * 
	 * @var	array
	 */
	protected static $image = array('value' => 'image',
		'expectedTypes' => array('URL')
	);

	/**
	 * The name of the item.
	 * Expected Type: Text
	 * 
	 * @var	array
	 */
	protected static $name = array('value' => 'name',
		'expectedTypes' => array('Text')
	);

	/**
	 * URL of a reference Web page that unambiguously indicates the item's identity. E.g. the URL of the item's Wikipedia page, Freebase page, or official website.
	 * Expected Type: URL
	 * 
	 * @var	array
	 */
	protected static $sameAs = array('value' => 'sameAs',
		'expectedTypes' => array('URL')
	);

	/**
	 * URL of the item.
	 * Expected Type: URL
	 * 
	 * @var	array
	 */
	protected static $url = array('value' => 'url',
		'expectedTypes' => array('URL')
	);

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
	 * Return the 'additionalType' Property value
	 *
	 * @return	string
	 */
	public static function pAdditionalType()
	{
		return self::getValue(self::$additionalType);
	}

	/**
	 * Return the 'description' Property value
	 *
	 * @return	string
	 */
	public static function pDescription()
	{
		return self::getValue(self::$description);
	}

	/**
	 * Return the 'image' Property value
	 *
	 * @return	string
	 */
	public static function pImage()
	{
		return self::getValue(self::$image);
	}

	/**
	 * Return the 'name' Property value
	 *
	 * @return	string
	 */
	public static function pName()
	{
		return self::getValue(self::$name);
	}

	/**
	 * Return the 'sameAs' Property value
	 *
	 * @return	string
	 */
	public static function pSameAs()
	{
		return self::getValue(self::$sameAs);
	}

	/**
	 * Return the 'url' Property value
	 *
	 * @return	string
	 */
	public static function pUrl()
	{
		return self::getValue(self::$url);
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
