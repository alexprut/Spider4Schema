<?php
/**
 * Residence type: Single-family home.
 *
 * @see    http://schema.org/SingleFamilyResidence
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
