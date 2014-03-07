<?php
/**
 * A country.
 *
 * @see    http://schema.org/Country
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
