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
 * An observational study is a type of medical study that attempts to infer the possible effect of a treatment through observation of a cohort of subjects over a period of time. In an observational study, the assignment of subjects into treatment groups versus control groups is outside the control of the investigator. This is in contrast with controlled studies, such as the randomized controlled trials represented by MedicalTrial, where each subject is randomly assigned to a treatment group or a control group before the start of the treatment.
 *
 * @package     Joomla.Platform
 * @subpackage  Microdata
 *
 * @see         http://schema.org/MedicalObservationalStudy
 * @since       13.1
*/
abstract class TypeMedicalObservationalStudy extends TypeMedicalStudy
{
	/**
	 * The Schema.org Type Scope
	 *
	 * @var string
	 */
	protected static $scope = 'https://schema.org/MedicalObservationalStudy';

	/**
	 * Specifics about the observational study design (enumerated).
	 * Expected Type: MedicalObservationalStudyDesign
	 * 
	 * @var	array
	 */
	protected static $studyDesign = array('value' => 'studyDesign',
		'expectedTypes' => array('MedicalObservationalStudyDesign')
	);

	/**
	 * Return the 'studyDesign' Property value
	 *
	 * @return	string
	 */
	public static function pStudyDesign()
	{
		return self::getValue(self::$studyDesign);
	}
}
