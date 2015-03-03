<?php
/**
 * A specific dosing schedule for a drug or supplement.
 *
 * @see    http://schema.org/DoseSchedule
*/
abstract class TypeDoseSchedule extends TypeMedicalIntangible
{
	/**
	 * The Schema.org Type Scope
	 *
	 * @var string
	 */
	protected static $scope = 'https://schema.org/DoseSchedule';

	/**
	 * The unit of the dose, e.g. 'mg'.
	 * Expected Type: Text
	 * 
	 * @var	array
	 */
	protected static $doseUnit = array('value' => 'doseUnit',
		'expectedTypes' => array('Text')
	);

	/**
	 * The value of the dose, e.g. 500.
	 * Expected Type: Number
	 * 
	 * @var	array
	 */
	protected static $doseValue = array('value' => 'doseValue',
		'expectedTypes' => array('Number')
	);

	/**
	 * How often the dose is taken, e.g. 'daily'.
	 * Expected Type: Text
	 * 
	 * @var	array
	 */
	protected static $frequency = array('value' => 'frequency',
		'expectedTypes' => array('Text')
	);

	/**
	 * Characteristics of the population for which this is intended, or which typically uses it, e.g. 'adults'.
	 * Expected Type: Text
	 * 
	 * @var	array
	 */
	protected static $targetPopulation = array('value' => 'targetPopulation',
		'expectedTypes' => array('Text')
	);

	/**
	 * Return the 'doseUnit' Property value
	 *
	 * @return	string
	 */
	public static function pDoseUnit()
	{
		return self::getValue(self::$doseUnit);
	}

	/**
	 * Return the 'doseValue' Property value
	 *
	 * @return	string
	 */
	public static function pDoseValue()
	{
		return self::getValue(self::$doseValue);
	}

	/**
	 * Return the 'frequency' Property value
	 *
	 * @return	string
	 */
	public static function pFrequency()
	{
		return self::getValue(self::$frequency);
	}

	/**
	 * Return the 'targetPopulation' Property value
	 *
	 * @return	string
	 */
	public static function pTargetPopulation()
	{
		return self::getValue(self::$targetPopulation);
	}
}
