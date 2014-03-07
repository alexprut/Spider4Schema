<?php
/**
 * Residence type: Apartment complex.
 *
 * @see    http://schema.org/ApartmentComplex
*/
abstract class TypeApartmentComplex extends TypeResidence
{
	/**
	 * The Schema.org Type Scope
	 *
	 * @var string
	 */
	protected static $scope = 'https://schema.org/ApartmentComplex';
}
