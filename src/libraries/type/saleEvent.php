<?php
/**
 * Event type: Sales event.
 *
 * @see    http://schema.org/SaleEvent
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
