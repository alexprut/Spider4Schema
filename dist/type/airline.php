<?php
/**
 * An organization that provides flights for passengers.
 *
 * @see    http://schema.org/Airline
*/
abstract class TypeAirline extends TypeOrganization
{
	/**
	 * The Schema.org Type Scope
	 *
	 * @var string
	 */
	protected static $scope = 'https://schema.org/Airline';

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
	 * Return the 'iataCode' Property value
	 *
	 * @return	string
	 */
	public static function pIataCode()
	{
		return self::getValue(self::$iataCode);
	}
}
