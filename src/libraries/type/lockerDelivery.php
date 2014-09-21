<?php
/**
 * A DeliveryMethod in which an item is made available via locker.
 *
 * @see    http://schema.org/LockerDelivery
*/
abstract class TypeLockerDelivery extends TypeDeliveryMethod
{
	/**
	 * The Schema.org Type Scope
	 *
	 * @var string
	 */
	protected static $scope = 'https://schema.org/LockerDelivery';
}
