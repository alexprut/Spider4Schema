<?php
/**
 * @package     Joomla.Platform
 * @subpackage  Microdata
 *
 * @copyright   Copyright (C) 2005 - 2013 Open Source Matters, Inc. All rights reserved.
 * @license     GNU General Public License version 2 or later; see LICENSE
 */

defined("JPATH_PLATFORM") or die;

/**
 * A property, used to indicate attributes and relationships of some Thing; equivalent to rdf:Property.
 *
 * @package     Joomla.Platform
 * @subpackage  Microdata
 *
 * @see         http://schema.org/Property
 * @since       13.1
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
