<?php
/**
 * A structured value providing information about the opening hours of a place or a certain service inside a place.
 *
 * @see    http://schema.org/OpeningHoursSpecification
 * @since  1.0
*/
abstract class TypeOpeningHoursSpecification extends TypeStructuredValue
{
	/**
	 * The Schema.org Type Scope
	 *
	 * @var string
	 */
	protected static $scope = 'https://schema.org/OpeningHoursSpecification';

	/**
	 * The closing hour of the place or service on the given day(s) of the week.
	 * Expected Type: Time
	 * 
	 * @var	array
	 */
	protected static $closes = array('value' => 'closes',
		'expectedTypes' => array('Time')
	);

	/**
	 * The day of the week for which these opening hours are valid.
	 * Expected Type: DayOfWeek
	 * 
	 * @var	array
	 */
	protected static $dayOfWeek = array('value' => 'dayOfWeek',
		'expectedTypes' => array('DayOfWeek')
	);

	/**
	 * The opening hour of the place or service on the given day(s) of the week.
	 * Expected Type: Time
	 * 
	 * @var	array
	 */
	protected static $opens = array('value' => 'opens',
		'expectedTypes' => array('Time')
	);

	/**
	 * The beginning of the validity of offer, price specification, or opening hours data.
	 * Expected Type: DateTime
	 * 
	 * @var	array
	 */
	protected static $validFrom = array('value' => 'validFrom',
		'expectedTypes' => array('DateTime')
	);

	/**
	 * The end of the validity of offer, price specification, or opening hours data.
	 * Expected Type: DateTime
	 * 
	 * @var	array
	 */
	protected static $validThrough = array('value' => 'validThrough',
		'expectedTypes' => array('DateTime')
	);

	/**
	 * Return the 'closes' Property value
	 *
	 * @return	string
	 */
	public static function pCloses()
	{
		return self::getValue(self::$closes);
	}

	/**
	 * Return the 'dayOfWeek' Property value
	 *
	 * @return	string
	 */
	public static function pDayOfWeek()
	{
		return self::getValue(self::$dayOfWeek);
	}

	/**
	 * Return the 'opens' Property value
	 *
	 * @return	string
	 */
	public static function pOpens()
	{
		return self::getValue(self::$opens);
	}

	/**
	 * Return the 'validFrom' Property value
	 *
	 * @return	string
	 */
	public static function pValidFrom()
	{
		return self::getValue(self::$validFrom);
	}

	/**
	 * Return the 'validThrough' Property value
	 *
	 * @return	string
	 */
	public static function pValidThrough()
	{
		return self::getValue(self::$validThrough);
	}
}
