<?php
/**
 * Event type: Sales event.
 *
 * @see    http://schema.org/SaleEvent
 * @since  1.0
*/
abstract class TypeSaleEvent extends TypeEvent
{
	/**
	 * The Schema.org Type Scope
	 *
	 * @var string
	 */
	protected static $scope = 'https://schema.org/SaleEvent';
}
