<?php
/**
 * A reservation to dine at a food-related business.
 *
 * @see    http://schema.org/FoodEstablishmentReservation
*/
abstract class TypeFoodEstablishmentReservation extends TypeReservation
{
	/**
	 * The Schema.org Type Scope
	 *
	 * @var string
	 */
	protected static $scope = 'https://schema.org/FoodEstablishmentReservation';

	/**
	 * The endTime of something. For a reserved event or service (e.g. FoodEstablishmentReservation), the time that it is expected to end. For actions that span a period of time, when the action was performed. e.g. John wrote a book from January to *December*. Note that Event uses startDate/endDate instead of startTime/endTime, even when describing dates with times. This situation may be clarified in future revisions.
	 * Expected Type: DateTime
	 * 
	 * @var	array
	 */
	protected static $endTime = array('value' => 'endTime',
		'expectedTypes' => array('DateTime')
	);

	/**
	 * Number of people the reservation should accommodate.
	 * Expected Type: QuantitativeValue, Number
	 * 
	 * @var	array
	 */
	protected static $partySize = array('value' => 'partySize',
		'expectedTypes' => array('QuantitativeValue', 'Number')
	);

	/**
	 * The startTime of something. For a reserved event or service (e.g. FoodEstablishmentReservation), the time that it is expected to start. For actions that span a period of time, when the action was performed. e.g. John wrote a book from *January* to December. Note that Event uses startDate/endDate instead of startTime/endTime, even when describing dates with times. This situation may be clarified in future revisions.
	 * Expected Type: DateTime
	 * 
	 * @var	array
	 */
	protected static $startTime = array('value' => 'startTime',
		'expectedTypes' => array('DateTime')
	);

	/**
	 * Return the 'endTime' Property value
	 *
	 * @return	string
	 */
	public static function pEndTime()
	{
		return self::getValue(self::$endTime);
	}

	/**
	 * Return the 'partySize' Property value
	 *
	 * @return	string
	 */
	public static function pPartySize()
	{
		return self::getValue(self::$partySize);
	}

	/**
	 * Return the 'startTime' Property value
	 *
	 * @return	string
	 */
	public static function pStartTime()
	{
		return self::getValue(self::$startTime);
	}
}
