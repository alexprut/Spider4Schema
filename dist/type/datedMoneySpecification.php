<?php
/**
 * A DatedMoneySpecification represents monetary values with optional start and end dates. For example, this could represent an employee's salary over a specific period of time.
 *
 * @see    http://schema.org/DatedMoneySpecification
*/
abstract class TypeDatedMoneySpecification extends TypeStructuredValue
{
	/**
	 * The Schema.org Type Scope
	 *
	 * @var string
	 */
	protected static $scope = 'https://schema.org/DatedMoneySpecification';

	/**
	 * The amount of money.
	 * Expected Type: Number
	 * 
	 * @var	array
	 */
	protected static $amount = array('value' => 'amount',
		'expectedTypes' => array('Number')
	);

	/**
	 * The currency in which the monetary amount is expressed (in 3-letter ISO 4217 format).
	 * Expected Type: Text
	 * 
	 * @var	array
	 */
	protected static $currency = array('value' => 'currency',
		'expectedTypes' => array('Text')
	);

	/**
	 * The end date and time of the item (in ISO 8601 date format).
	 * Expected Type: Date
	 * 
	 * @var	array
	 */
	protected static $endDate = array('value' => 'endDate',
		'expectedTypes' => array('Date')
	);

	/**
	 * The start date and time of the item (in ISO 8601 date format).
	 * Expected Type: Date
	 * 
	 * @var	array
	 */
	protected static $startDate = array('value' => 'startDate',
		'expectedTypes' => array('Date')
	);

	/**
	 * Return the 'amount' Property value
	 *
	 * @return	string
	 */
	public static function pAmount()
	{
		return self::getValue(self::$amount);
	}

	/**
	 * Return the 'currency' Property value
	 *
	 * @return	string
	 */
	public static function pCurrency()
	{
		return self::getValue(self::$currency);
	}

	/**
	 * Return the 'endDate' Property value
	 *
	 * @return	string
	 */
	public static function pEndDate()
	{
		return self::getValue(self::$endDate);
	}

	/**
	 * Return the 'startDate' Property value
	 *
	 * @return	string
	 */
	public static function pStartDate()
	{
		return self::getValue(self::$startDate);
	}
}
