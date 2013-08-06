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
 * Any indication of the existence of a medical condition or disease.
 *
 * @package     Joomla.Platform
 * @subpackage  Microdata
 *
 * @see         http://schema.org/MedicalSignOrSymptom
 * @since       13.1
*/
abstract class TypeMedicalSignOrSymptom extends TypeMedicalEntity
{
	/**
	 * The Schema.org Type Scope
	 *
	 * @var string
	 */
	protected static $scope = 'https://schema.org/MedicalSignOrSymptom';

	/**
	 * An underlying cause. More specifically, one of the causative agent(s) that are most directly responsible for the pathophysiologic process that eventually results in the occurrence.
	 * Expected Type: MedicalCause
	 * 
	 * @var	array
	 */
	protected static $cause = array('value' => 'cause',
		'expectedTypes' => array('MedicalCause')
	);

	/**
	 * A possible treatment to address this condition, sign or symptom.
	 * Expected Type: MedicalTherapy
	 * 
	 * @var	array
	 */
	protected static $possibleTreatment = array('value' => 'possibleTreatment',
		'expectedTypes' => array('MedicalTherapy')
	);

	/**
	 * Return the 'cause' Property value
	 *
	 * @return	string
	 */
	public static function pCause()
	{
		return self::getValue(self::$cause);
	}

	/**
	 * Return the 'possibleTreatment' Property value
	 *
	 * @return	string
	 */
	public static function pPossibleTreatment()
	{
		return self::getValue(self::$possibleTreatment);
	}
}
