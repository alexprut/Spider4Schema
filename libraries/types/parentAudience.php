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
 * A set of characteristics describing parents, who can be interested in viewing some content
 *
 * @package     Joomla.Platform
 * @subpackage  Microdata
 *
 * @see         http://schema.org/ParentAudience
 * @since       13.1
*/
abstract class TypeParentAudience extends TypePeopleAudience
{
	/**
	 * The Schema.org Type Scope
	 *
	 * @var string
	 */
	protected static $scope = 'https://schema.org/ParentAudience';

	/**
	 * Maximal age of the child
	 * Expected Type: Number
	 * 
	 * @var	array
	 */
	protected static $childMaxAge = array('value' => 'childMaxAge',
		'expectedTypes' => array('Number')
	);

	/**
	 * Minimal age of the child
	 * Expected Type: Number
	 * 
	 * @var	array
	 */
	protected static $childMinAge = array('value' => 'childMinAge',
		'expectedTypes' => array('Number')
	);

	/**
	 * Return the 'childMaxAge' Property value
	 *
	 * @return	string
	 */
	public static function pChildMaxAge()
	{
		return self::getValue(self::$childMaxAge);
	}

	/**
	 * Return the 'childMinAge' Property value
	 *
	 * @return	string
	 */
	public static function pChildMinAge()
	{
		return self::getValue(self::$childMinAge);
	}
}
