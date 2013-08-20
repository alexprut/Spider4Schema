<?php
/**
 * A dentist.
 *
 * @see    http://schema.org/Dentist
 * @since  1.0
*/
abstract class TypeDentist extends TypeMedicalOrganization
{
	/**
	 * The Schema.org Type Scope
	 *
	 * @var string
	 */
	protected static $scope = 'https://schema.org/Dentist';
}
