<?php
/**
 * Used to describe a seat, such as a reserved seat in an event reservation.
 *
 * @see    http://schema.org/Seat
*/
abstract class TypeSeat extends TypeIntangible
{
	/**
	 * The Schema.org Type Scope
	 *
	 * @var string
	 */
	protected static $scope = 'https://schema.org/Seat';

	/**
	 * The location of the reserved seat (e.g., 27).
	 * Expected Type: Text
	 * 
	 * @var	array
	 */
	protected static $seatNumber = array('value' => 'seatNumber',
		'expectedTypes' => array('Text')
	);

	/**
	 * The row location of the reserved seat (e.g., B).
	 * Expected Type: Text
	 * 
	 * @var	array
	 */
	protected static $seatRow = array('value' => 'seatRow',
		'expectedTypes' => array('Text')
	);

	/**
	 * The section location of the reserved seat (e.g. Orchestra).
	 * Expected Type: Text
	 * 
	 * @var	array
	 */
	protected static $seatSection = array('value' => 'seatSection',
		'expectedTypes' => array('Text')
	);

	/**
	 * The type/class of the seat.
	 * Expected Type: QualitativeValue, Text
	 * 
	 * @var	array
	 */
	protected static $seatingType = array('value' => 'seatingType',
		'expectedTypes' => array('QualitativeValue', 'Text')
	);

	/**
	 * Return the 'seatNumber' Property value
	 *
	 * @return	string
	 */
	public static function pSeatNumber()
	{
		return self::getValue(self::$seatNumber);
	}

	/**
	 * Return the 'seatRow' Property value
	 *
	 * @return	string
	 */
	public static function pSeatRow()
	{
		return self::getValue(self::$seatRow);
	}

	/**
	 * Return the 'seatSection' Property value
	 *
	 * @return	string
	 */
	public static function pSeatSection()
	{
		return self::getValue(self::$seatSection);
	}

	/**
	 * Return the 'seatingType' Property value
	 *
	 * @return	string
	 */
	public static function pSeatingType()
	{
		return self::getValue(self::$seatingType);
	}
}
