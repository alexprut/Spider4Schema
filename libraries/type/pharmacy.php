<?php
/**
 * A pharmacy or drugstore.
 *
 * @see    http://schema.org/Pharmacy
 * @since  1.0
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
