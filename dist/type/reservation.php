<?php
/**
 * Describes a reservation for travel, dining or an event. Some reservations require tickets.
 *
 * @see    http://schema.org/Reservation
*/
abstract class TypeReservation extends TypeIntangible
{
	/**
	 * The Schema.org Type Scope
	 *
	 * @var string
	 */
	protected static $scope = 'https://schema.org/Reservation';

	/**
	 * The date and time the reservation was booked.
	 * Expected Type: DateTime
	 * 
	 * @var	array
	 */
	protected static $bookingTime = array('value' => 'bookingTime',
		'expectedTypes' => array('DateTime')
	);

	/**
	 * An entity that arranges for an exchange between a buyer and a seller. In most cases a broker never acquires or releases ownership of a product or service involved in an exchange. If it is not clear whether an entity is a broker, seller, or buyer, the latter two terms are preferred. Supersedes bookingAgent.
	 * Expected Type: Organization, Person
	 * 
	 * @var	array
	 */
	protected static $broker = array('value' => 'broker',
		'expectedTypes' => array('Organization', 'Person')
	);

	/**
	 * The date and time the reservation was modified.
	 * Expected Type: DateTime
	 * 
	 * @var	array
	 */
	protected static $modifiedTime = array('value' => 'modifiedTime',
		'expectedTypes' => array('DateTime')
	);

	/**
	 * The currency (in 3-letter ISO 4217 format) of the price or a price component, when attached to PriceSpecification and its subtypes.
	 * Expected Type: Text
	 * 
	 * @var	array
	 */
	protected static $priceCurrency = array('value' => 'priceCurrency',
		'expectedTypes' => array('Text')
	);

	/**
	 * Any membership in a frequent flyer, hotel loyalty program, etc. being applied to the reservation.
	 * Expected Type: ProgramMembership
	 * 
	 * @var	array
	 */
	protected static $programMembershipUsed = array('value' => 'programMembershipUsed',
		'expectedTypes' => array('ProgramMembership')
	);

	/**
	 * The service provider, service operator, or service performer; the goods producer. Another party (a seller) may offer those services or goods on behalf of the provider. A provider may also serve as the seller. Supersedes carrier.
	 * Expected Type: Organization, Person
	 * 
	 * @var	array
	 */
	protected static $provider = array('value' => 'provider',
		'expectedTypes' => array('Organization', 'Person')
	);

	/**
	 * The thing -- flight, event, restaurant,etc. being reserved.
	 * Expected Type: Thing
	 * 
	 * @var	array
	 */
	protected static $reservationFor = array('value' => 'reservationFor',
		'expectedTypes' => array('Thing')
	);

	/**
	 * A unique identifier for the reservation.
	 * Expected Type: Text
	 * 
	 * @var	array
	 */
	protected static $reservationId = array('value' => 'reservationId',
		'expectedTypes' => array('Text')
	);

	/**
	 * The current status of the reservation.
	 * Expected Type: ReservationStatusType
	 * 
	 * @var	array
	 */
	protected static $reservationStatus = array('value' => 'reservationStatus',
		'expectedTypes' => array('ReservationStatusType')
	);

	/**
	 * A ticket associated with the reservation.
	 * Expected Type: Ticket
	 * 
	 * @var	array
	 */
	protected static $reservedTicket = array('value' => 'reservedTicket',
		'expectedTypes' => array('Ticket')
	);

	/**
	 * The total price for the reservation or ticket, including applicable taxes, shipping, etc.
	 * Expected Type: Number, PriceSpecification, Text
	 * 
	 * @var	array
	 */
	protected static $totalPrice = array('value' => 'totalPrice',
		'expectedTypes' => array('Number', 'PriceSpecification', 'Text')
	);

	/**
	 * The person or organization the reservation or ticket is for.
	 * Expected Type: Organization, Person
	 * 
	 * @var	array
	 */
	protected static $underName = array('value' => 'underName',
		'expectedTypes' => array('Organization', 'Person')
	);

	/**
	 * Return the 'bookingTime' Property value
	 *
	 * @return	string
	 */
	public static function pBookingTime()
	{
		return self::getValue(self::$bookingTime);
	}

	/**
	 * Return the 'broker' Property value
	 *
	 * @return	string
	 */
	public static function pBroker()
	{
		return self::getValue(self::$broker);
	}

	/**
	 * Return the 'modifiedTime' Property value
	 *
	 * @return	string
	 */
	public static function pModifiedTime()
	{
		return self::getValue(self::$modifiedTime);
	}

	/**
	 * Return the 'priceCurrency' Property value
	 *
	 * @return	string
	 */
	public static function pPriceCurrency()
	{
		return self::getValue(self::$priceCurrency);
	}

	/**
	 * Return the 'programMembershipUsed' Property value
	 *
	 * @return	string
	 */
	public static function pProgramMembershipUsed()
	{
		return self::getValue(self::$programMembershipUsed);
	}

	/**
	 * Return the 'provider' Property value
	 *
	 * @return	string
	 */
	public static function pProvider()
	{
		return self::getValue(self::$provider);
	}

	/**
	 * Return the 'reservationFor' Property value
	 *
	 * @return	string
	 */
	public static function pReservationFor()
	{
		return self::getValue(self::$reservationFor);
	}

	/**
	 * Return the 'reservationId' Property value
	 *
	 * @return	string
	 */
	public static function pReservationId()
	{
		return self::getValue(self::$reservationId);
	}

	/**
	 * Return the 'reservationStatus' Property value
	 *
	 * @return	string
	 */
	public static function pReservationStatus()
	{
		return self::getValue(self::$reservationStatus);
	}

	/**
	 * Return the 'reservedTicket' Property value
	 *
	 * @return	string
	 */
	public static function pReservedTicket()
	{
		return self::getValue(self::$reservedTicket);
	}

	/**
	 * Return the 'totalPrice' Property value
	 *
	 * @return	string
	 */
	public static function pTotalPrice()
	{
		return self::getValue(self::$totalPrice);
	}

	/**
	 * Return the 'underName' Property value
	 *
	 * @return	string
	 */
	public static function pUnderName()
	{
		return self::getValue(self::$underName);
	}
}
