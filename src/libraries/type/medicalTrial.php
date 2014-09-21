<?php
/**
 * A medical trial is a type of medical study that uses scientific process used to compare the safety and efficacy of medical therapies or medical procedures. In general, medical trials are controlled and subjects are allocated at random to the different treatment and/or control groups.
 *
 * @see    http://schema.org/MedicalTrial
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
