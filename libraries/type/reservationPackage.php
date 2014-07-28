<?php
/**
 * A group of multiple reservations with common values for all sub-reservations.
 *
 * @see    http://schema.org/ReservationPackage
*/
abstract class TypeReservationPackage extends TypeReservation
{
	/**
	 * The Schema.org Type Scope
	 *
	 * @var string
	 */
	protected static $scope = 'https://schema.org/ReservationPackage';

	/**
	 * The individual reservations included in the package. Typically a repeated property.
	 * Expected Type: Reservation
	 * 
	 * @var	array
	 */
	protected static $subReservation = array('value' => 'subReservation',
		'expectedTypes' => array('Reservation')
	);

	/**
	 * Return the 'subReservation' Property value
	 *
	 * @return	string
	 */
	public static function pSubReservation()
	{
		return self::getValue(self::$subReservation);
	}
}
