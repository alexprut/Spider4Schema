<?php
/**
 * A state or province.
 *
 * @see    http://schema.org/State
 * @since  1.0
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
