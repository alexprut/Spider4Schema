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
 * Any condition of the human body that affects the normal functioning of a person, whether physically or mentally. Includes diseases, injuries, disabilities, disorders, syndromes, etc.
 *
 * @package     Joomla.Platform
 * @subpackage  Microdata
 *
 * @see         http://schema.org/MedicalCondition
 * @since       13.1
*/
abstract class TypeMedicalCondition extends TypeMedicalEntity
{
	/**
	 * The Schema.org Type Scope
	 *
	 * @var string
	 */
	protected static $scope = 'https://schema.org/MedicalCondition';

	/**
	 * The anatomy of the underlying organ system or structures associated with this entity.
	 * Expected Type: AnatomicalStructure', 'AnatomicalSystem', 'SuperficialAnatomy
	 * 
	 * @var	array
	 */
	protected static $associatedAnatomy = array('value' => 'associatedAnatomy',
		'expectedTypes' => array('AnatomicalStructure', 'AnatomicalSystem', 'SuperficialAnatomy')
	);

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
	 * One of a set of differential diagnoses for the condition. Specifically, a closely-related or competing diagnosis typically considered later in the cognitive process whereby this medical condition is distinguished from others most likely responsible for a similar collection of signs and symptoms to reach the most parsimonious diagnosis or diagnoses in a patient.
	 * Expected Type: DDxElement
	 * 
	 * @var	array
	 */
	protected static $differentialDiagnosis = array('value' => 'differentialDiagnosis',
		'expectedTypes' => array('DDxElement')
	);

	/**
	 * The characteristics of associated patients, such as age, gender, race etc.
	 * Expected Type: Text
	 * 
	 * @var	array
	 */
	protected static $epidemiology = array('value' => 'epidemiology',
		'expectedTypes' => array('Text')
	);

	/**
	 * The likely outcome in either the short term or long term of the medical condition.
	 * Expected Type: Text
	 * 
	 * @var	array
	 */
	protected static $expectedPrognosis = array('value' => 'expectedPrognosis',
		'expectedTypes' => array('Text')
	);

	/**
	 * The expected progression of the condition if it is not treated and allowed to progress naturally.
	 * Expected Type: Text
	 * 
	 * @var	array
	 */
	protected static $naturalProgression = array('value' => 'naturalProgression',
		'expectedTypes' => array('Text')
	);

	/**
	 * Changes in the normal mechanical, physical, and biochemical functions that are associated with this activity or condition.
	 * Expected Type: Text
	 * 
	 * @var	array
	 */
	protected static $pathophysiology = array('value' => 'pathophysiology',
		'expectedTypes' => array('Text')
	);

	/**
	 * A possible unexpected and unfavorable evolution of a medical condition. Complications may include worsening of the signs or symptoms of the disease, extension of the condition to other organ systems, etc.
	 * Expected Type: Text
	 * 
	 * @var	array
	 */
	protected static $possibleComplication = array('value' => 'possibleComplication',
		'expectedTypes' => array('Text')
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
	 * A preventative therapy used to prevent an initial occurrence of the medical condition, such as vaccination.
	 * Expected Type: MedicalTherapy
	 * 
	 * @var	array
	 */
	protected static $primaryPrevention = array('value' => 'primaryPrevention',
		'expectedTypes' => array('MedicalTherapy')
	);

	/**
	 * A modifiable or non-modifiable factor that increases the risk of a patient contracting this condition, e.g. age,  coexisting condition.
	 * Expected Type: MedicalRiskFactor
	 * 
	 * @var	array
	 */
	protected static $riskFactor = array('value' => 'riskFactor',
		'expectedTypes' => array('MedicalRiskFactor')
	);

	/**
	 * A preventative therapy used to prevent reoccurrence of the medical condition after an initial episode of the condition.
	 * Expected Type: MedicalTherapy
	 * 
	 * @var	array
	 */
	protected static $secondaryPrevention = array('value' => 'secondaryPrevention',
		'expectedTypes' => array('MedicalTherapy')
	);

	/**
	 * A sign or symptom of this condition. Signs are objective or physically observable manifestations of the medical condition while symptoms are the subjective experienceof the medical condition.
	 * Expected Type: MedicalSignOrSymptom
	 * 
	 * @var	array
	 */
	protected static $signOrSymptom = array('value' => 'signOrSymptom',
		'expectedTypes' => array('MedicalSignOrSymptom')
	);

	/**
	 * The stage of the condition, if applicable.
	 * Expected Type: MedicalConditionStage
	 * 
	 * @var	array
	 */
	protected static $stage = array('value' => 'stage',
		'expectedTypes' => array('MedicalConditionStage')
	);

	/**
	 * A more specific type of the condition, where applicable, for example 'Type 1 Diabetes', 'Type 2 Diabetes', or 'Gestational Diabetes' for Diabetes.
	 * Expected Type: Text
	 * 
	 * @var	array
	 */
	protected static $subtype = array('value' => 'subtype',
		'expectedTypes' => array('Text')
	);

	/**
	 * A medical test typically performed given this condition.
	 * Expected Type: MedicalTest
	 * 
	 * @var	array
	 */
	protected static $typicalTest = array('value' => 'typicalTest',
		'expectedTypes' => array('MedicalTest')
	);

	/**
	 * Return the 'associatedAnatomy' Property value
	 *
	 * @return	string
	 */
	public static function pAssociatedAnatomy()
	{
		return self::getValue(self::$associatedAnatomy);
	}

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
	 * Return the 'differentialDiagnosis' Property value
	 *
	 * @return	string
	 */
	public static function pDifferentialDiagnosis()
	{
		return self::getValue(self::$differentialDiagnosis);
	}

	/**
	 * Return the 'epidemiology' Property value
	 *
	 * @return	string
	 */
	public static function pEpidemiology()
	{
		return self::getValue(self::$epidemiology);
	}

	/**
	 * Return the 'expectedPrognosis' Property value
	 *
	 * @return	string
	 */
	public static function pExpectedPrognosis()
	{
		return self::getValue(self::$expectedPrognosis);
	}

	/**
	 * Return the 'naturalProgression' Property value
	 *
	 * @return	string
	 */
	public static function pNaturalProgression()
	{
		return self::getValue(self::$naturalProgression);
	}

	/**
	 * Return the 'pathophysiology' Property value
	 *
	 * @return	string
	 */
	public static function pPathophysiology()
	{
		return self::getValue(self::$pathophysiology);
	}

	/**
	 * Return the 'possibleComplication' Property value
	 *
	 * @return	string
	 */
	public static function pPossibleComplication()
	{
		return self::getValue(self::$possibleComplication);
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

	/**
	 * Return the 'primaryPrevention' Property value
	 *
	 * @return	string
	 */
	public static function pPrimaryPrevention()
	{
		return self::getValue(self::$primaryPrevention);
	}

	/**
	 * Return the 'riskFactor' Property value
	 *
	 * @return	string
	 */
	public static function pRiskFactor()
	{
		return self::getValue(self::$riskFactor);
	}

	/**
	 * Return the 'secondaryPrevention' Property value
	 *
	 * @return	string
	 */
	public static function pSecondaryPrevention()
	{
		return self::getValue(self::$secondaryPrevention);
	}

	/**
	 * Return the 'signOrSymptom' Property value
	 *
	 * @return	string
	 */
	public static function pSignOrSymptom()
	{
		return self::getValue(self::$signOrSymptom);
	}

	/**
	 * Return the 'stage' Property value
	 *
	 * @return	string
	 */
	public static function pStage()
	{
		return self::getValue(self::$stage);
	}

	/**
	 * Return the 'subtype' Property value
	 *
	 * @return	string
	 */
	public static function pSubtype()
	{
		return self::getValue(self::$subtype);
	}

	/**
	 * Return the 'typicalTest' Property value
	 *
	 * @return	string
	 */
	public static function pTypicalTest()
	{
		return self::getValue(self::$typicalTest);
	}
}
