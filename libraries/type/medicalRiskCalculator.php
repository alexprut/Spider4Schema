<?php
/**
 * A complex mathematical calculation requiring an online calculator, used to assess prognosis. Note: use the url property of Thing to record any URLs for online calculators.
 *
 * @see    http://schema.org/MedicalRiskCalculator
*/
abstract class TypeMedicalRiskCalculator extends TypeMedicalRiskEstimator
{
	/**
	 * The Schema.org Type Scope
	 *
	 * @var string
	 */
	protected static $scope = 'https://schema.org/MedicalRiskCalculator';
}
