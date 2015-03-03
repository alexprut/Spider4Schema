<?php
/**
 * A trip on a commercial bus line.
 *
 * @see    http://schema.org/BusTrip
*/
abstract class TypeBusTrip extends TypeIntangible
{
	/**
	 * The Schema.org Type Scope
	 *
	 * @var string
	 */
	protected static $scope = 'https://schema.org/BusTrip';

	/**
	 * The stop or station from which the bus arrives.
	 * Expected Type: BusStation, BusStop
	 * 
	 * @var	array
	 */
	protected static $arrivalBusStop = array('value' => 'arrivalBusStop',
		'expectedTypes' => array('BusStation', 'BusStop')
	);

	/**
	 * The expected arrival time.
	 * Expected Type: DateTime
	 * 
	 * @var	array
	 */
	protected static $arrivalTime = array('value' => 'arrivalTime',
		'expectedTypes' => array('DateTime')
	);

	/**
	 * The name of the bus (e.g. Bolt Express).
	 * Expected Type: Text
	 * 
	 * @var	array
	 */
	protected static $busName = array('value' => 'busName',
		'expectedTypes' => array('Text')
	);

	/**
	 * The unique identifier for the bus.
	 * Expected Type: Text
	 * 
	 * @var	array
	 */
	protected static $busNumber = array('value' => 'busNumber',
		'expectedTypes' => array('Text')
	);

	/**
	 * The stop or station from which the bus departs.
	 * Expected Type: BusStation, BusStop
	 * 
	 * @var	array
	 */
	protected static $departureBusStop = array('value' => 'departureBusStop',
		'expectedTypes' => array('BusStation', 'BusStop')
	);

	/**
	 * The expected departure time.
	 * Expected Type: DateTime
	 * 
	 * @var	array
	 */
	protected static $departureTime = array('value' => 'departureTime',
		'expectedTypes' => array('DateTime')
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
	 * Return the 'arrivalBusStop' Property value
	 *
	 * @return	string
	 */
	public static function pArrivalBusStop()
	{
		return self::getValue(self::$arrivalBusStop);
	}

	/**
	 * Return the 'arrivalTime' Property value
	 *
	 * @return	string
	 */
	public static function pArrivalTime()
	{
		return self::getValue(self::$arrivalTime);
	}

	/**
	 * Return the 'busName' Property value
	 *
	 * @return	string
	 */
	public static function pBusName()
	{
		return self::getValue(self::$busName);
	}

	/**
	 * Return the 'busNumber' Property value
	 *
	 * @return	string
	 */
	public static function pBusNumber()
	{
		return self::getValue(self::$busNumber);
	}

	/**
	 * Return the 'departureBusStop' Property value
	 *
	 * @return	string
	 */
	public static function pDepartureBusStop()
	{
		return self::getValue(self::$departureBusStop);
	}

	/**
	 * Return the 'departureTime' Property value
	 *
	 * @return	string
	 */
	public static function pDepartureTime()
	{
		return self::getValue(self::$departureTime);
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
}
