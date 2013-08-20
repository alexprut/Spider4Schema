<?php
/**
 * A process of care used in either a diagnostic, therapeutic, or palliative capacity that relies on invasive (surgical), non-invasive, or percutaneous techniques.
 *
 * @see    http://schema.org/MedicalProcedure
 * @since  1.0
*/
abstract class TypeMedicalProcedure extends TypeMedicalEntity
{
	/**
	 * The Schema.org Type Scope
	 *
	 * @var string
	 */
	protected static $scope = 'https://schema.org/MedicalProcedure';

	/**
	 * Typical or recommended followup care after the procedure is performed.
	 * Expected Type: Text
	 * 
	 * @var	array
	 */
	protected static $followup = array('value' => 'followup',
		'expectedTypes' => array('Text')
	);

	/**
	 * How the procedure is performed.
	 * Expected Type: Text
	 * 
	 * @var	array
	 */
	protected static $howPerformed = array('value' => 'howPerformed',
		'expectedTypes' => array('Text')
	);

	/**
	 * Typical preparation that a patient must undergo before having the procedure performed.
	 * Expected Type: Text
	 * 
	 * @var	array
	 */
	protected static $preparation = array('value' => 'preparation',
		'expectedTypes' => array('Text')
	);

	/**
	 * The type of procedure, for example Surgical, Noninvasive, or Percutaneous.
	 * Expected Type: MedicalProcedureType
	 * 
	 * @var	array
	 */
	protected static $procedureType = array('value' => 'procedureType',
		'expectedTypes' => array('MedicalProcedureType')
	);

	/**
	 * Return the 'followup' Property value
	 *
	 * @return	string
	 */
	public static function pFollowup()
	{
		return self::getValue(self::$followup);
	}

	/**
	 * Return the 'howPerformed' Property value
	 *
	 * @return	string
	 */
	public static function pHowPerformed()
	{
		return self::getValue(self::$howPerformed);
	}

	/**
	 * Return the 'preparation' Property value
	 *
	 * @return	string
	 */
	public static function pPreparation()
	{
		return self::getValue(self::$preparation);
	}

	/**
	 * Return the 'procedureType' Property value
	 *
	 * @return	string
	 */
	public static function pProcedureType()
	{
		return self::getValue(self::$procedureType);
	}
}
