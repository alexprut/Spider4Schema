<?php
/**
 * An automobile.
 *
 * @see    http://schema.org/Car
*/
abstract class TypeCar extends TypeVehicle
{
	/**
	 * The Schema.org Type Scope
	 *
	 * @var string
	 */
	protected static $scope = 'https://schema.org/Car';
}
