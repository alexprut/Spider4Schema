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
 * A medical trial is a type of medical study that uses scientific process used to compare the safety and efficacy of medical therapies or medical procedures. In general, medical trials are controlled and subjects are allocated at random to the different treatment and/or control groups.
 *
 * @package     Joomla.Platform
 * @subpackage  Microdata
 *
 * @see         http://schema.org/MedicalTrial
 * @since       13.1
*/
abstract class TypeMedicalTrial extends TypeMedicalStudy
{
	/**
	 * The Schema.org Type Scope
	 *
	 * @var string
	 */
	protected static $scope = 'https://schema.org/MedicalTrial';

	/**
	 * The phase of the trial.
	 * Expected Type: Text
	 * 
	 * @var	array
	 */
	protected static $phase = array('value' => 'phase',
		'expectedTypes' => array('Text')
	);

	/**
	 * Specifics about the trial design (enumerated).
	 * Expected Type: MedicalTrialDesign
	 * 
	 * @var	array
	 */
	protected static $trialDesign = array('value' => 'trialDesign',
		'expectedTypes' => array('MedicalTrialDesign')
	);

	/**
	 * Return the 'phase' Property value
	 *
	 * @return	string
	 */
	public static function pPhase()
	{
		return self::getValue(self::$phase);
	}

	/**
	 * Return the 'trialDesign' Property value
	 *
	 * @return	string
	 */
	public static function pTrialDesign()
	{
		return self::getValue(self::$trialDesign);
	}
}
