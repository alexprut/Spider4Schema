<?php
/**
 * A reservation for a rental car.
 *
 * @see    http://schema.org/RentalCarReservation
*/
abstract class TypeRentalCarReservation extends TypeReservation
{
	/**
	 * The Schema.org Type Scope
	 *
	 * @var string
	 */
	protected static $scope = 'https://schema.org/RentalCarReservation';

	/**
	 * Where a rental car can be dropped off.
	 * Expected Type: Place
	 * 
	 * @var	array
	 */
	protected static $dropoffLocation = array('value' => 'dropoffLocation',
		'expectedTypes' => array('Place')
	);

	/**
	 * When a rental car can be dropped off.
	 * Expected Type: DateTime
	 * 
	 * @var	array
	 */
	protected static $dropoffTime = array('value' => 'dropoffTime',
		'expectedTypes' => array('DateTime')
	);

	/**
	 * Where a taxi will pick up a passenger or a rental car can be picked up.
	 * Expected Type: Place
	 * 
	 * @var	array
	 */
	protected static $pickupLocation = array('value' => 'pickupLocation',
		'expectedTypes' => array('Place')
	);

	/**
	 * When a taxi will pickup a passenger or a rental car can be picked up.
	 * Expected Type: DateTime
	 * 
	 * @var	array
	 */
	protected static $pickupTime = array('value' => 'pickupTime',
		'expectedTypes' => array('DateTime')
	);

	/**
	 * Return the 'dropoffLocation' Property value
	 *
	 * @return	string
	 */
	public static function pDropoffLocation()
	{
		return self::getValue(self::$dropoffLocation);
	}

	/**
	 * Return the 'dropoffTime' Property value
	 *
	 * @return	string
	 */
	public static function pDropoffTime()
	{
		return self::getValue(self::$dropoffTime);
	}

	/**
	 * Return the 'pickupLocation' Property value
	 *
	 * @return	string
	 */
	public static function pPickupLocation()
	{
		return self::getValue(self::$pickupLocation);
	}

	/**
	 * Return the 'pickupTime' Property value
	 *
	 * @return	string
	 */
	public static function pPickupTime()
	{
		return self::getValue(self::$pickupTime);
	}
}
