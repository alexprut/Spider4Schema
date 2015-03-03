<?php
/**
 * When a single product is associated with multiple offers (for example, the same pair of shoes is offered by different merchants), then AggregateOffer can be used.
 *
 * @see    http://schema.org/AggregateOffer
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
	 * Expected Type: Text, Number
	 * 
	 * @var	array
	 */
	protected static $highPrice = array('value' => 'highPrice',
		'expectedTypes' => array('Text', 'Number')
	);

	/**
	 * The lowest price of all offers available.
	 * Expected Type: Text, Number
	 * 
	 * @var	array
	 */
	protected static $lowPrice = array('value' => 'lowPrice',
		'expectedTypes' => array('Text', 'Number')
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
	 * An offer to provide this item—for example, an offer to sell a product, rent the DVD of a movie, or give away tickets to an event.
	 * Expected Type: Offer
	 * 
	 * @var	array
	 */
	protected static $offers = array('value' => 'offers',
		'expectedTypes' => array('Offer')
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

	/**
	 * Return the 'offers' Property value
	 *
	 * @return	string
	 */
	public static function pOffers()
	{
		return self::getValue(self::$offers);
	}
}
