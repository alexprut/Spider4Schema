<?php
/**
 * A dentist.
 *
 * @see    http://schema.org/Dentist
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
