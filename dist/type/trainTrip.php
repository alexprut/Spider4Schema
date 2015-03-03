<?php
/**
 * A trip on a commercial train line.
 *
 * @see    http://schema.org/TrainTrip
*/
abstract class TypeTrainTrip extends TypeIntangible
{
	/**
	 * The Schema.org Type Scope
	 *
	 * @var string
	 */
	protected static $scope = 'https://schema.org/TrainTrip';

	/**
	 * The platform where the train arrives.
	 * Expected Type: Text
	 * 
	 * @var	array
	 */
	protected static $arrivalPlatform = array('value' => 'arrivalPlatform',
		'expectedTypes' => array('Text')
	);

	/**
	 * The station where the train trip ends.
	 * Expected Type: TrainStation
	 * 
	 * @var	array
	 */
	protected static $arrivalStation = array('value' => 'arrivalStation',
		'expectedTypes' => array('TrainStation')
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
	 * The platform from which the train departs.
	 * Expected Type: Text
	 * 
	 * @var	array
	 */
	protected static $departurePlatform = array('value' => 'departurePlatform',
		'expectedTypes' => array('Text')
	);

	/**
	 * The station from which the train departs.
	 * Expected Type: TrainStation
	 * 
	 * @var	array
	 */
	protected static $departureStation = array('value' => 'departureStation',
		'expectedTypes' => array('TrainStation')
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
	 * Expected Type: Person, Organization
	 * 
	 * @var	array
	 */
	protected static $provider = array('value' => 'provider',
		'expectedTypes' => array('Person', 'Organization')
	);

	/**
	 * The name of the train (e.g. The Orient Express).
	 * Expected Type: Text
	 * 
	 * @var	array
	 */
	protected static $trainName = array('value' => 'trainName',
		'expectedTypes' => array('Text')
	);

	/**
	 * The unique identifier for the train.
	 * Expected Type: Text
	 * 
	 * @var	array
	 */
	protected static $trainNumber = array('value' => 'trainNumber',
		'expectedTypes' => array('Text')
	);

	/**
	 * Return the 'arrivalPlatform' Property value
	 *
	 * @return	string
	 */
	public static function pArrivalPlatform()
	{
		return self::getValue(self::$arrivalPlatform);
	}

	/**
	 * Return the 'arrivalStation' Property value
	 *
	 * @return	string
	 */
	public static function pArrivalStation()
	{
		return self::getValue(self::$arrivalStation);
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
	 * Return the 'departurePlatform' Property value
	 *
	 * @return	string
	 */
	public static function pDeparturePlatform()
	{
		return self::getValue(self::$departurePlatform);
	}

	/**
	 * Return the 'departureStation' Property value
	 *
	 * @return	string
	 */
	public static function pDepartureStation()
	{
		return self::getValue(self::$departureStation);
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

	/**
	 * Return the 'trainName' Property value
	 *
	 * @return	string
	 */
	public static function pTrainName()
	{
		return self::getValue(self::$trainName);
	}

	/**
	 * Return the 'trainNumber' Property value
	 *
	 * @return	string
	 */
	public static function pTrainNumber()
	{
		return self::getValue(self::$trainNumber);
	}
}
