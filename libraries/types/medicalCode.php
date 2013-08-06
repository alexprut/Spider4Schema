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
 * A code for a medical entity.
 *
 * @package     Joomla.Platform
 * @subpackage  Microdata
 *
 * @see         http://schema.org/MedicalCode
 * @since       13.1
*/
abstract class TypeMedicalCode extends TypeMedicalIntangible
{
	/**
	 * The Schema.org Type Scope
	 *
	 * @var string
	 */
	protected static $scope = 'https://schema.org/MedicalCode';

	/**
	 * The actual code.
	 * Expected Type: Text
	 * 
	 * @var	array
	 */
	protected static $codeValue = array('value' => 'codeValue',
		'expectedTypes' => array('Text')
	);

	/**
	 * The coding system, e.g. 'ICD-10'.
	 * Expected Type: Text
	 * 
	 * @var	array
	 */
	protected static $codingSystem = array('value' => 'codingSystem',
		'expectedTypes' => array('Text')
	);

	/**
	 * Return the 'codeValue' Property value
	 *
	 * @return	string
	 */
	public static function pCodeValue()
	{
		return self::getValue(self::$codeValue);
	}

	/**
	 * Return the 'codingSystem' Property value
	 *
	 * @return	string
	 */
	public static function pCodingSystem()
	{
		return self::getValue(self::$codingSystem);
	}
}
