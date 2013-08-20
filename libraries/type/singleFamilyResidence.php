<?php
/**
 * Residence type: Single-family home.
 *
 * @see    http://schema.org/SingleFamilyResidence
 * @since  1.0
*/
abstract class TypeSingleFamilyResidence extends TypeResidence
{
	/**
	 * The Schema.org Type Scope
	 *
	 * @var string
	 */
	protected static $scope = 'https://schema.org/SingleFamilyResidence';
}
