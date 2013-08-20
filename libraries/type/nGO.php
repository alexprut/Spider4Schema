<?php
/**
 * Organization: Non-governmental Organization.
 *
 * @see    http://schema.org/NGO
 * @since  1.0
*/
abstract class TypeNGO extends TypeOrganization
{
	/**
	 * The Schema.org Type Scope
	 *
	 * @var string
	 */
	protected static $scope = 'https://schema.org/NGO';
}
