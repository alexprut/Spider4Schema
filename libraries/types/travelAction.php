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
 * The act of traveling from an fromLocation to a destination by a specified mode of transport, optionally with participants.
 *
 * @package     Joomla.Platform
 * @subpackage  Microdata
 *
 * @see         http://schema.org/TravelAction
 * @since       13.1
*/
abstract class TypeTravelAction extends TypeMoveAction
{
	/**
	 * The Schema.org Type Scope
	 *
	 * @var string
	 */
	protected static $scope = 'https://schema.org/TravelAction';

	/**
	 * A sub property of asset. The distance travelled.
	 * Expected Type: Distance
	 * 
	 * @var	array
	 */
	protected static $distance = array('value' => 'distance',
		'expectedTypes' => array('Distance')
	);

	/**
	 * Return the 'distance' Property value
	 *
	 * @return	string
	 */
	public static function pDistance()
	{
		return self::getValue(self::$distance);
	}
}
