<?php
/**
 * Any indication of the existence of a medical condition or disease that is apparent to the patient.
 *
 * @see    http://schema.org/MedicalSymptom
*/
abstract class TypeMedicalSymptom extends TypeMedicalSignOrSymptom
{
	/**
	 * The Schema.org Type Scope
	 *
	 * @var string
	 */
	protected static $scope = 'https://schema.org/MedicalSymptom';
}
