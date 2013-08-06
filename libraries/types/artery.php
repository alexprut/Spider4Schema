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
 * A type of blood vessel that specifically carries blood away from the heart.
 *
 * @package     Joomla.Platform
 * @subpackage  Microdata
 *
 * @see         http://schema.org/Artery
 * @since       13.1
*/
abstract class TypeArtery extends TypeVessel
{
	/**
	 * The Schema.org Type Scope
	 *
	 * @var string
	 */
	protected static $scope = 'https://schema.org/Artery';

	/**
	 * The branches that comprise the arterial structure.
	 * Expected Type: AnatomicalStructure
	 * 
	 * @var	array
	 */
	protected static $arterialBranch = array('value' => 'arterialBranch',
		'expectedTypes' => array('AnatomicalStructure')
	);

	/**
	 * The anatomical or organ system that the artery originates from.
	 * Expected Type: AnatomicalStructure
	 * 
	 * @var	array
	 */
	protected static $source = array('value' => 'source',
		'expectedTypes' => array('AnatomicalStructure')
	);

	/**
	 * The area to which the artery supplies blood to.
	 * Expected Type: AnatomicalStructure
	 * 
	 * @var	array
	 */
	protected static $supplyTo = array('value' => 'supplyTo',
		'expectedTypes' => array('AnatomicalStructure')
	);

	/**
	 * Return the 'arterialBranch' Property value
	 *
	 * @return	string
	 */
	public static function pArterialBranch()
	{
		return self::getValue(self::$arterialBranch);
	}

	/**
	 * Return the 'source' Property value
	 *
	 * @return	string
	 */
	public static function pSource()
	{
		return self::getValue(self::$source);
	}

	/**
	 * Return the 'supplyTo' Property value
	 *
	 * @return	string
	 */
	public static function pSupplyTo()
	{
		return self::getValue(self::$supplyTo);
	}
}
