<?php
/**
 * Design models for medical trials. Enumerated type.
 *
 * @see    http://schema.org/MedicalTrialDesign
 * @since  1.0
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
