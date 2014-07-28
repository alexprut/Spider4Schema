<?php
/**
 * Target audiences for medical web pages. Enumerated type.
 *
 * @see    http://schema.org/MedicalAudience
*/
abstract class TypeMedicalAudience extends TypeMedicalEnumeration
{
	/**
	 * The Schema.org Type Scope
	 *
	 * @var string
	 */
	protected static $scope = 'https://schema.org/MedicalAudience';
}
