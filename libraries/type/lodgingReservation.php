<?php
/**
 * A reservation for lodging at a hotel, motel, inn, etc.
 *
 * @see    http://schema.org/LodgingReservation
*/
abstract class TypeLodgingReservation extends TypeReservation
{
	/**
	 * The Schema.org Type Scope
	 *
	 * @var string
	 */
	protected static $scope = 'https://schema.org/LodgingReservation';

	/**
	 * The earliest someone may check into a lodging establishment.
	 * Expected Type: DateTime
	 * 
	 * @var	array
	 */
	protected static $checkinTime = array('value' => 'checkinTime',
		'expectedTypes' => array('DateTime')
	);

	/**
	 * The latest someone may check out of a lodging establishment.
	 * Expected Type: DateTime
	 * 
	 * @var	array
	 */
	protected static $checkoutTime = array('value' => 'checkoutTime',
		'expectedTypes' => array('DateTime')
	);

	/**
	 * A full description of the lodging unit.
	 * Expected Type: Text
	 * 
	 * @var	array
	 */
	protected static $lodgingUnitDescription = array('value' => 'lodgingUnitDescription',
		'expectedTypes' => array('Text')
	);

	/**
	 * Textual description of the unit type (including suite vs. room, size of bed, etc.).
	 * Expected Type: Text, QualitativeValue
	 * 
	 * @var	array
	 */
	protected static $lodgingUnitType = array('value' => 'lodgingUnitType',
		'expectedTypes' => array('Text', 'QualitativeValue')
	);

	/**
	 * The number of adults staying in the unit.
	 * Expected Type: QuantitativeValue, Number
	 * 
	 * @var	array
	 */
	protected static $numAdults = array('value' => 'numAdults',
		'expectedTypes' => array('QuantitativeValue', 'Number')
	);

	/**
	 * The number of children staying in the unit.
	 * Expected Type: QuantitativeValue, Number
	 * 
	 * @var	array
	 */
	protected static $numChildren = array('value' => 'numChildren',
		'expectedTypes' => array('QuantitativeValue', 'Number')
	);

	/**
	 * Return the 'checkinTime' Property value
	 *
	 * @return	string
	 */
	public static function pCheckinTime()
	{
		return self::getValue(self::$checkinTime);
	}

	/**
	 * Return the 'checkoutTime' Property value
	 *
	 * @return	string
	 */
	public static function pCheckoutTime()
	{
		return self::getValue(self::$checkoutTime);
	}

	/**
	 * Return the 'lodgingUnitDescription' Property value
	 *
	 * @return	string
	 */
	public static function pLodgingUnitDescription()
	{
		return self::getValue(self::$lodgingUnitDescription);
	}

	/**
	 * Return the 'lodgingUnitType' Property value
	 *
	 * @return	string
	 */
	public static function pLodgingUnitType()
	{
		return self::getValue(self::$lodgingUnitType);
	}

	/**
	 * Return the 'numAdults' Property value
	 *
	 * @return	string
	 */
	public static function pNumAdults()
	{
		return self::getValue(self::$numAdults);
	}

	/**
	 * Return the 'numChildren' Property value
	 *
	 * @return	string
	 */
	public static function pNumChildren()
	{
		return self::getValue(self::$numChildren);
	}
}
