<?php
/**
 * A reservation for a taxi.
 *
 * @see    http://schema.org/TaxiReservation
*/
abstract class TypeTaxiReservation extends TypeReservation
{
	/**
	 * The Schema.org Type Scope
	 *
	 * @var string
	 */
	protected static $scope = 'https://schema.org/TaxiReservation';

	/**
	 * Number of people the reservation should accommodate.
	 * Expected Type: QuantitativeValue, Number
	 * 
	 * @var	array
	 */
	protected static $partySize = array('value' => 'partySize',
		'expectedTypes' => array('QuantitativeValue', 'Number')
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
	 * Return the 'partySize' Property value
	 *
	 * @return	string
	 */
	public static function pPartySize()
	{
		return self::getValue(self::$partySize);
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
