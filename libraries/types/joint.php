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
 * The anatomical location at which two or more bones make contact.
 *
 * @package     Joomla.Platform
 * @subpackage  Microdata
 *
 * @see         http://schema.org/Joint
 * @since       13.1
*/
abstract class TypeJoint extends TypeAnatomicalStructure
{
	/**
	 * The Schema.org Type Scope
	 *
	 * @var string
	 */
	protected static $scope = 'https://schema.org/Joint';

	/**
	 * The biomechanical properties of the bone.
	 * Expected Type: Text
	 * 
	 * @var	array
	 */
	protected static $biomechnicalClass = array('value' => 'biomechnicalClass',
		'expectedTypes' => array('Text')
	);

	/**
	 * The degree of mobility the joint allows.
	 * Expected Type: Text
	 * 
	 * @var	array
	 */
	protected static $functionalClass = array('value' => 'functionalClass',
		'expectedTypes' => array('Text')
	);

	/**
	 * The name given to how bone physically connects to each other.
	 * Expected Type: Text
	 * 
	 * @var	array
	 */
	protected static $structuralClass = array('value' => 'structuralClass',
		'expectedTypes' => array('Text')
	);

	/**
	 * Return the 'biomechnicalClass' Property value
	 *
	 * @return	string
	 */
	public static function pBiomechnicalClass()
	{
		return self::getValue(self::$biomechnicalClass);
	}

	/**
	 * Return the 'functionalClass' Property value
	 *
	 * @return	string
	 */
	public static function pFunctionalClass()
	{
		return self::getValue(self::$functionalClass);
	}

	/**
	 * Return the 'structuralClass' Property value
	 *
	 * @return	string
	 */
	public static function pStructuralClass()
	{
		return self::getValue(self::$structuralClass);
	}
}
