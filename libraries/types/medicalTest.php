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
 * Any medical test, typically performed for diagnostic purposes.
 *
 * @package     Joomla.Platform
 * @subpackage  Microdata
 *
 * @see         http://schema.org/MedicalTest
 * @since       13.1
*/
abstract class TypeMedicalTest extends TypeMedicalEntity
{
	/**
	 * The Schema.org Type Scope
	 *
	 * @var string
	 */
	protected static $scope = 'https://schema.org/MedicalTest';

	/**
	 * Drugs that affect the test's results.
	 * Expected Type: Drug
	 * 
	 * @var	array
	 */
	protected static $affectedBy = array('value' => 'affectedBy',
		'expectedTypes' => array('Drug')
	);

	/**
	 * Range of acceptable values for a typical patient, when applicable.
	 * Expected Type: Text
	 * 
	 * @var	array
	 */
	protected static $normalRange = array('value' => 'normalRange',
		'expectedTypes' => array('Text')
	);

	/**
	 * A sign detected by the test.
	 * Expected Type: MedicalSign
	 * 
	 * @var	array
	 */
	protected static $signDetected = array('value' => 'signDetected',
		'expectedTypes' => array('MedicalSign')
	);

	/**
	 * A condition the test is used to diagnose.
	 * Expected Type: MedicalCondition
	 * 
	 * @var	array
	 */
	protected static $usedToDiagnose = array('value' => 'usedToDiagnose',
		'expectedTypes' => array('MedicalCondition')
	);

	/**
	 * Device used to perform the test.
	 * Expected Type: MedicalDevice
	 * 
	 * @var	array
	 */
	protected static $usesDevice = array('value' => 'usesDevice',
		'expectedTypes' => array('MedicalDevice')
	);

	/**
	 * Return the 'affectedBy' Property value
	 *
	 * @return	string
	 */
	public static function pAffectedBy()
	{
		return self::getValue(self::$affectedBy);
	}

	/**
	 * Return the 'normalRange' Property value
	 *
	 * @return	string
	 */
	public static function pNormalRange()
	{
		return self::getValue(self::$normalRange);
	}

	/**
	 * Return the 'signDetected' Property value
	 *
	 * @return	string
	 */
	public static function pSignDetected()
	{
		return self::getValue(self::$signDetected);
	}

	/**
	 * Return the 'usedToDiagnose' Property value
	 *
	 * @return	string
	 */
	public static function pUsedToDiagnose()
	{
		return self::getValue(self::$usedToDiagnose);
	}

	/**
	 * Return the 'usesDevice' Property value
	 *
	 * @return	string
	 */
	public static function pUsesDevice()
	{
		return self::getValue(self::$usesDevice);
	}
}
