<?php
/**
 * A property, used to indicate attributes and relationships of some Thing; equivalent to rdf:Property.
 *
 * @see    http://schema.org/Property
 * @since  1.0
*/
abstract class TypeProperty extends TypeThing
{
	/**
	 * The Schema.org Type Scope
	 *
	 * @var string
	 */
	protected static $scope = 'https://schema.org/Property';

	/**
	 * Relates a property to a class that is (one of) the type(s) the property is expected to be used on.
	 * Expected Type: Class
	 * 
	 * @var	array
	 */
	protected static $domainIncludes = array('value' => 'domainIncludes',
		'expectedTypes' => array('Class')
	);

	/**
	 * Relates a property to a class that constitutes (one of) the expected type(s) for values of the property.
	 * Expected Type: Class
	 * 
	 * @var	array
	 */
	protected static $rangeIncludes = array('value' => 'rangeIncludes',
		'expectedTypes' => array('Class')
	);

	/**
	 * Return the 'domainIncludes' Property value
	 *
	 * @return	string
	 */
	public static function pDomainIncludes()
	{
		return self::getValue(self::$domainIncludes);
	}

	/**
	 * Return the 'rangeIncludes' Property value
	 *
	 * @return	string
	 */
	public static function pRangeIncludes()
	{
		return self::getValue(self::$rangeIncludes);
	}
}
