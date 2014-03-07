<?php
/**
 * A simple system that adds up the number of risk factors to yield a score that is associated with prognosis, e.g. CHAD score, TIMI risk score.
 *
 * @see    http://schema.org/MedicalRiskScore
*/
abstract class TypeMedicalRiskScore extends TypeMedicalRiskEstimator
{
	/**
	 * The Schema.org Type Scope
	 *
	 * @var string
	 */
	protected static $scope = 'https://schema.org/MedicalRiskScore';

	/**
	 * The algorithm or rules to follow to compute the score.
	 * Expected Type: Text
	 * 
	 * @var	array
	 */
	protected static $algorithm = array('value' => 'algorithm',
		'expectedTypes' => array('Text')
	);

	/**
	 * Return the 'algorithm' Property value
	 *
	 * @return	string
	 */
	public static function pAlgorithm()
	{
		return self::getValue(self::$algorithm);
	}
}
