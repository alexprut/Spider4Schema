<?php
/**
 * A reservation for bus travel.
 *
 * @see    http://schema.org/BusReservation
*/
abstract class TypeBusReservation extends TypeReservation
{
	/**
	 * The Schema.org Type Scope
	 *
	 * @var string
	 */
	protected static $scope = 'https://schema.org/BusReservation';
}
