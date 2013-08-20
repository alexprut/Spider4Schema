<?php
/**
 * A vet's office.
 *
 * @see    http://schema.org/VeterinaryCare
 * @since  1.0
*/
abstract class TypeVeterinaryCare extends TypeMedicalOrganization
{
	/**
	 * The Schema.org Type Scope
	 *
	 * @var string
	 */
	protected static $scope = 'https://schema.org/VeterinaryCare';
}
