<?php
/**
 * A property, used to indicate attributes and relationships of some Thing; equivalent to rdf:Property.
 *
 * @see    http://schema.org/Property
*/
abstract class TypeProperty extends TypeIntangible
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
	 * Relates a property to a property that is its inverse. Inverse properties relate the same pairs of items to each other, but in reversed direction. For example, the 'alumni' and 'alumniOf' properties are inverseOf each other. Some properties don't have explicit inverses; in these situations RDFa and JSON-LD syntax for reverse properties can be used.
	 * Expected Type: Property
	 * 
	 * @var	array
	 */
	protected static $inverseOf = array('value' => 'inverseOf',
		'expectedTypes' => array('Property')
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
	 * Relates a property to one that supersedes it.
	 * Expected Type: Property
	 * 
	 * @var	array
	 */
	protected static $supersededBy = array('value' => 'supersededBy',
		'expectedTypes' => array('Property')
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
	 * Return the 'inverseOf' Property value
	 *
	 * @return	string
	 */
	public static function pInverseOf()
	{
		return self::getValue(self::$inverseOf);
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

	/**
	 * Return the 'supersededBy' Property value
	 *
	 * @return	string
	 */
	public static function pSupersededBy()
	{
		return self::getValue(self::$supersededBy);
	}
}
