<?php
/**
 * A reservation for air travel.
 *
 * @see    http://schema.org/FlightReservation
*/
abstract class TypeFlightReservation extends TypeReservation
{
	/**
	 * The Schema.org Type Scope
	 *
	 * @var string
	 */
	protected static $scope = 'https://schema.org/FlightReservation';

	/**
	 * The airline-specific indicator of boarding order / preference.
	 * Expected Type: Text
	 * 
	 * @var	array
	 */
	protected static $boardingGroup = array('value' => 'boardingGroup',
		'expectedTypes' => array('Text')
	);

	/**
	 * Return the 'boardingGroup' Property value
	 *
	 * @return	string
	 */
	public static function pBoardingGroup()
	{
		return self::getValue(self::$boardingGroup);
	}
}
