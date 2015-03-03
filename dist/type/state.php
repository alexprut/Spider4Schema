<?php
/**
 * A state or province of a country.
 *
 * @see    http://schema.org/State
*/
abstract class TypeState extends TypeAdministrativeArea
{
	/**
	 * The Schema.org Type Scope
	 *
	 * @var string
	 */
	protected static $scope = 'https://schema.org/State';
}
