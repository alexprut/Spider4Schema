<?php
/**
 * A reservation for an event like a concert, sporting event, or lecture.
 *
 * @see    http://schema.org/EventReservation
*/
abstract class TypeEventReservation extends TypeReservation
{
	/**
	 * The Schema.org Type Scope
	 *
	 * @var string
	 */
	protected static $scope = 'https://schema.org/EventReservation';
}
