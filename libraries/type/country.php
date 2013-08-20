<?php
/**
 * A country.
 *
 * @see    http://schema.org/Country
 * @since  1.0
*/
abstract class TypeCountry extends TypeAdministrativeArea
{
	/**
	 * The Schema.org Type Scope
	 *
	 * @var string
	 */
	protected static $scope = 'https://schema.org/Country';
}
