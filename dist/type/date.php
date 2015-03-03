<?php
/**
 * A date value in ISO 8601 date format.
 *
 * @see    http://schema.org/Date
*/
abstract class TypeDate extends TypeDataType
{
	/**
	 * The Schema.org Type Scope
	 *
	 * @var string
	 */
	protected static $scope = 'https://schema.org/Date';
}
