<?php
/**
 * The status of a medical study. Enumerated type.
 *
 * @see    http://schema.org/MedicalStudyStatus
 * @since  1.0
*/
abstract class TypeMedicalStudyStatus extends TypeMedicalEnumeration
{
	/**
	 * The Schema.org Type Scope
	 *
	 * @var string
	 */
	protected static $scope = 'https://schema.org/MedicalStudyStatus';
}
