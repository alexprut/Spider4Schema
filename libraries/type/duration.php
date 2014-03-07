<?php
/**
 * Quantity: Duration (use  ISO 8601 duration format).
 *
 * @see    http://schema.org/Duration
*/
abstract class TypeDuration extends TypeQuantity
{
	/**
	 * The Schema.org Type Scope
	 *
	 * @var string
	 */
	protected static $scope = 'https://schema.org/Duration';
}
