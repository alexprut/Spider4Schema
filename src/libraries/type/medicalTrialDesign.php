<?php
/**
 * Design models for medical trials. Enumerated type.
 *
 * @see    http://schema.org/MedicalTrialDesign
*/
abstract class TypeMedicalTrialDesign extends TypeMedicalEnumeration
{
	/**
	 * The Schema.org Type Scope
	 *
	 * @var string
	 */
	protected static $scope = 'https://schema.org/MedicalTrialDesign';
}
