<?php
/**
 * When a single product that has different offers (for example, the same pair of shoes is offered by different merchants), then AggregateOffer can be used.
 *
 * @see    http://schema.org/AggregateOffer
 * @since  1.0
*/
abstract class TypeAggregateOffer extends TypeOffer
{
	/**
	 * The Schema.org Type Scope
	 *
	 * @var string
	 */
	protected static $scope = 'https://schema.org/AggregateOffer';

	/**
	 * The highest price of all offers available.
	 * Expected Type: Number, Text
	 * 
	 * @var	array
	 */
	protected static $highPrice = array('value' => 'highPrice',
		'expectedTypes' => array('Number', 'Text')
	);

	/**
	 * The lowest price of all offers available.
	 * Expected Type: Number, Text
	 * 
	 * @var	array
	 */
	protected static $lowPrice = array('value' => 'lowPrice',
		'expectedTypes' => array('Number', 'Text')
	);

	/**
	 * The number of offers for the product.
	 * Expected Type: Integer
	 * 
	 * @var	array
	 */
	protected static $offerCount = array('value' => 'offerCount',
		'expectedTypes' => array('Integer')
	);

	/**
	 * Return the 'highPrice' Property value
	 *
	 * @return	string
	 */
	public static function pHighPrice()
	{
		return self::getValue(self::$highPrice);
	}

	/**
	 * Return the 'lowPrice' Property value
	 *
	 * @return	string
	 */
	public static function pLowPrice()
	{
		return self::getValue(self::$lowPrice);
	}

	/**
	 * Return the 'offerCount' Property value
	 *
	 * @return	string
	 */
	public static function pOfferCount()
	{
		return self::getValue(self::$offerCount);
	}
}
