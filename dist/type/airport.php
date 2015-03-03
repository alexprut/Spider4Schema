<?php
/**
 * An airport.
 *
 * @see    http://schema.org/Airport
*/
abstract class TypeAirport extends TypeCivicStructure
{
	/**
	 * The Schema.org Type Scope
	 *
	 * @var string
	 */
	protected static $scope = 'https://schema.org/Airport';

	/**
	 * IATA identifier for an airline or airport.
	 * Expected Type: Text
	 * 
	 * @var	array
	 */
	protected static $iataCode = array('value' => 'iataCode',
		'expectedTypes' => array('Text')
	);

	/**
	 * IACO identifier for an airport.
	 * Expected Type: Text
	 * 
	 * @var	array
	 */
	protected static $icaoCode = array('value' => 'icaoCode',
		'expectedTypes' => array('Text')
	);

	/**
	 * Return the 'iataCode' Property value
	 *
	 * @return	string
	 */
	public static function pIataCode()
	{
		return self::getValue(self::$iataCode);
	}

	/**
	 * Return the 'icaoCode' Property value
	 *
	 * @return	string
	 */
	public static function pIcaoCode()
	{
		return self::getValue(self::$icaoCode);
	}
}
