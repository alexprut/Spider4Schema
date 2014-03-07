<?php
/**
 * A medical organization, such as a doctor's office or clinic.
 *
 * @see    http://schema.org/MedicalOrganization
*/
abstract class TypeMedicalOrganization extends TypeLocalBusiness
{
	/**
	 * The Schema.org Type Scope
	 *
	 * @var string
	 */
	protected static $scope = 'https://schema.org/MedicalOrganization';
}
