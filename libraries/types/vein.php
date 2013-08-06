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
 * A type of blood vessel that specifically carries blood to the heart.
 *
 * @package     Joomla.Platform
 * @subpackage  Microdata
 *
 * @see         http://schema.org/Vein
 * @since       13.1
*/
abstract class TypeVein extends TypeVessel
{
	/**
	 * The Schema.org Type Scope
	 *
	 * @var string
	 */
	protected static $scope = 'https://schema.org/Vein';

	/**
	 * The vasculature that the vein drains into.
	 * Expected Type: Vessel
	 * 
	 * @var	array
	 */
	protected static $drainsTo = array('value' => 'drainsTo',
		'expectedTypes' => array('Vessel')
	);

	/**
	 * The anatomical or organ system drained by this vessel; generally refers to a specific part of an organ.
	 * Expected Type: AnatomicalStructure', 'AnatomicalSystem
	 * 
	 * @var	array
	 */
	protected static $regionDrained = array('value' => 'regionDrained',
		'expectedTypes' => array('AnatomicalStructure', 'AnatomicalSystem')
	);

	/**
	 * The anatomical or organ system that the vein flows into; a larger structure that the vein connects to.
	 * Expected Type: AnatomicalStructure
	 * 
	 * @var	array
	 */
	protected static $tributary = array('value' => 'tributary',
		'expectedTypes' => array('AnatomicalStructure')
	);

	/**
	 * Return the 'drainsTo' Property value
	 *
	 * @return	string
	 */
	public static function pDrainsTo()
	{
		return self::getValue(self::$drainsTo);
	}

	/**
	 * Return the 'regionDrained' Property value
	 *
	 * @return	string
	 */
	public static function pRegionDrained()
	{
		return self::getValue(self::$regionDrained);
	}

	/**
	 * Return the 'tributary' Property value
	 *
	 * @return	string
	 */
	public static function pTributary()
	{
		return self::getValue(self::$tributary);
	}
}
