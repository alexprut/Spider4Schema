<?php
/**
 * An airline flight.
 *
 * @see    http://schema.org/Flight
*/
abstract class TypeFlight extends TypeIntangible
{
	/**
	 * The Schema.org Type Scope
	 *
	 * @var string
	 */
	protected static $scope = 'https://schema.org/Flight';

	/**
	 * The kind of aircraft (e.g., "Boeing 747").
	 * Expected Type: Text, Vehicle
	 * 
	 * @var	array
	 */
	protected static $aircraft = array('value' => 'aircraft',
		'expectedTypes' => array('Text', 'Vehicle')
	);

	/**
	 * The airport where the flight terminates.
	 * Expected Type: Airport
	 * 
	 * @var	array
	 */
	protected static $arrivalAirport = array('value' => 'arrivalAirport',
		'expectedTypes' => array('Airport')
	);

	/**
	 * Identifier of the flight's arrival gate.
	 * Expected Type: Text
	 * 
	 * @var	array
	 */
	protected static $arrivalGate = array('value' => 'arrivalGate',
		'expectedTypes' => array('Text')
	);

	/**
	 * Identifier of the flight's arrival terminal.
	 * Expected Type: Text
	 * 
	 * @var	array
	 */
	protected static $arrivalTerminal = array('value' => 'arrivalTerminal',
		'expectedTypes' => array('Text')
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
	 * The airport where the flight originates.
	 * Expected Type: Airport
	 * 
	 * @var	array
	 */
	protected static $departureAirport = array('value' => 'departureAirport',
		'expectedTypes' => array('Airport')
	);

	/**
	 * Identifier of the flight's departure gate.
	 * Expected Type: Text
	 * 
	 * @var	array
	 */
	protected static $departureGate = array('value' => 'departureGate',
		'expectedTypes' => array('Text')
	);

	/**
	 * Identifier of the flight's departure terminal.
	 * Expected Type: Text
	 * 
	 * @var	array
	 */
	protected static $departureTerminal = array('value' => 'departureTerminal',
		'expectedTypes' => array('Text')
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
	 * The estimated time the flight will take.
	 * Expected Type: Duration, Text
	 * 
	 * @var	array
	 */
	protected static $estimatedFlightDuration = array('value' => 'estimatedFlightDuration',
		'expectedTypes' => array('Duration', 'Text')
	);

	/**
	 * The distance of the flight.
	 * Expected Type: Text, Distance
	 * 
	 * @var	array
	 */
	protected static $flightDistance = array('value' => 'flightDistance',
		'expectedTypes' => array('Text', 'Distance')
	);

	/**
	 * The unique identifier for a flight including the airline IATA code. For example, if describing United flight 110, where the IATA code for United is 'UA', the flightNumber is 'UA110'.
	 * Expected Type: Text
	 * 
	 * @var	array
	 */
	protected static $flightNumber = array('value' => 'flightNumber',
		'expectedTypes' => array('Text')
	);

	/**
	 * Description of the meals that will be provided or available for purchase.
	 * Expected Type: Text
	 * 
	 * @var	array
	 */
	protected static $mealService = array('value' => 'mealService',
		'expectedTypes' => array('Text')
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
	 * An entity which offers (sells / leases / lends / loans) the services / goods. A seller may also be a provider. Supersedes merchant, vendor.
	 * Expected Type: Organization, Person
	 * 
	 * @var	array
	 */
	protected static $seller = array('value' => 'seller',
		'expectedTypes' => array('Organization', 'Person')
	);

	/**
	 * The time when a passenger can check into the flight online.
	 * Expected Type: DateTime
	 * 
	 * @var	array
	 */
	protected static $webCheckinTime = array('value' => 'webCheckinTime',
		'expectedTypes' => array('DateTime')
	);

	/**
	 * Return the 'aircraft' Property value
	 *
	 * @return	string
	 */
	public static function pAircraft()
	{
		return self::getValue(self::$aircraft);
	}

	/**
	 * Return the 'arrivalAirport' Property value
	 *
	 * @return	string
	 */
	public static function pArrivalAirport()
	{
		return self::getValue(self::$arrivalAirport);
	}

	/**
	 * Return the 'arrivalGate' Property value
	 *
	 * @return	string
	 */
	public static function pArrivalGate()
	{
		return self::getValue(self::$arrivalGate);
	}

	/**
	 * Return the 'arrivalTerminal' Property value
	 *
	 * @return	string
	 */
	public static function pArrivalTerminal()
	{
		return self::getValue(self::$arrivalTerminal);
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
	 * Return the 'departureAirport' Property value
	 *
	 * @return	string
	 */
	public static function pDepartureAirport()
	{
		return self::getValue(self::$departureAirport);
	}

	/**
	 * Return the 'departureGate' Property value
	 *
	 * @return	string
	 */
	public static function pDepartureGate()
	{
		return self::getValue(self::$departureGate);
	}

	/**
	 * Return the 'departureTerminal' Property value
	 *
	 * @return	string
	 */
	public static function pDepartureTerminal()
	{
		return self::getValue(self::$departureTerminal);
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
	 * Return the 'estimatedFlightDuration' Property value
	 *
	 * @return	string
	 */
	public static function pEstimatedFlightDuration()
	{
		return self::getValue(self::$estimatedFlightDuration);
	}

	/**
	 * Return the 'flightDistance' Property value
	 *
	 * @return	string
	 */
	public static function pFlightDistance()
	{
		return self::getValue(self::$flightDistance);
	}

	/**
	 * Return the 'flightNumber' Property value
	 *
	 * @return	string
	 */
	public static function pFlightNumber()
	{
		return self::getValue(self::$flightNumber);
	}

	/**
	 * Return the 'mealService' Property value
	 *
	 * @return	string
	 */
	public static function pMealService()
	{
		return self::getValue(self::$mealService);
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
	 * Return the 'seller' Property value
	 *
	 * @return	string
	 */
	public static function pSeller()
	{
		return self::getValue(self::$seller);
	}

	/**
	 * Return the 'webCheckinTime' Property value
	 *
	 * @return	string
	 */
	public static function pWebCheckinTime()
	{
		return self::getValue(self::$webCheckinTime);
	}
}
