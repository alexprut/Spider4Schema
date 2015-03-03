<?php
/**
 * The status of a medical study. Enumerated type.
 *
 * @see    http://schema.org/MedicalStudyStatus
*/
abstract class TypeMedicalStudyStatus extends TypeEnumeration
{
	/**
	 * The Schema.org Type Scope
	 *
	 * @var string
	 */
	protected static $scope = 'https://schema.org/MedicalStudyStatus';
}
