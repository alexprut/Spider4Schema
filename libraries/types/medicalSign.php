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
 * Any physical manifestation of a person's medical condition discoverable by objective diagnostic tests or physical examination.
 *
 * @package     Joomla.Platform
 * @subpackage  Microdata
 *
 * @see         http://schema.org/MedicalSign
 * @since       13.1
*/
abstract class TypeMedicalSign extends TypeMedicalSignOrSymptom
{
	/**
	 * The Schema.org Type Scope
	 *
	 * @var string
	 */
	protected static $scope = 'https://schema.org/MedicalSign';

	/**
	 * A physical examination that can identify this sign.
	 * Expected Type: PhysicalExam
	 * 
	 * @var	array
	 */
	protected static $identifyingExam = array('value' => 'identifyingExam',
		'expectedTypes' => array('PhysicalExam')
	);

	/**
	 * A diagnostic test that can identify this sign.
	 * Expected Type: MedicalTest
	 * 
	 * @var	array
	 */
	protected static $identifyingTest = array('value' => 'identifyingTest',
		'expectedTypes' => array('MedicalTest')
	);

	/**
	 * Return the 'identifyingExam' Property value
	 *
	 * @return	string
	 */
	public static function pIdentifyingExam()
	{
		return self::getValue(self::$identifyingExam);
	}

	/**
	 * Return the 'identifyingTest' Property value
	 *
	 * @return	string
	 */
	public static function pIdentifyingTest()
	{
		return self::getValue(self::$identifyingTest);
	}
}
