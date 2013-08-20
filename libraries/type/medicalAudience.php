<?php
/**
 * Target audiences for medical web pages. Enumerated type.
 *
 * @see    http://schema.org/MedicalAudience
 * @since  1.0
*/
abstract class TypeMedicalAudience extends TypeAudience
{
	/**
	 * The Schema.org Type Scope
	 *
	 * @var string
	 */
	protected static $scope = 'https://schema.org/MedicalAudience';
}
