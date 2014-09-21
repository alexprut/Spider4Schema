<?php
/**
 * Enumerated status values for Order.
 *
 * @see    http://schema.org/OrderStatus
*/
abstract class TypeOrderStatus extends TypeEnumeration
{
	/**
	 * The Schema.org Type Scope
	 *
	 * @var string
	 */
	protected static $scope = 'https://schema.org/OrderStatus';
}
