<?php
/**
 * A pharmacy or drugstore.
 *
 * @see    http://schema.org/Pharmacy
*/
abstract class TypePharmacy extends TypeMedicalOrganization
{
	/**
	 * The Schema.org Type Scope
	 *
	 * @var string
	 */
	protected static $scope = 'https://schema.org/Pharmacy';
}
