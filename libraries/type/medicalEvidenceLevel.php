<?php
/**
 * Level of evidence for a medical guideline. Enumerated type.
 *
 * @see    http://schema.org/MedicalEvidenceLevel
 * @since  1.0
*/
abstract class TypeMedicalEvidenceLevel extends TypeMedicalEnumeration
{
	/**
	 * The Schema.org Type Scope
	 *
	 * @var string
	 */
	protected static $scope = 'https://schema.org/MedicalEvidenceLevel';
}
