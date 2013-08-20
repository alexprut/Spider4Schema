<?php
/**
 * Any specific branch of medical science or practice. Medical specialities include clinical specialties that pertain to particular organ systems and their respective disease states, as well as allied health specialties. Enumerated type.
 *
 * @see    http://schema.org/MedicalSpecialty
 * @since  1.0
*/
abstract class TypeMedicalSpecialty extends TypeMedicalEnumeration
{
	/**
	 * The Schema.org Type Scope
	 *
	 * @var string
	 */
	protected static $scope = 'https://schema.org/MedicalSpecialty';
}
