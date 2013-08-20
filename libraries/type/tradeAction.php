<?php
/**
 * The act of participating in an exchange of goods and services for monetary compensation. An agent trades an object, product or service with a participant in exchange for a one time or periodic payment.
 *
 * @see    http://schema.org/TradeAction
 * @since  1.0
*/
abstract class TypeTradeAction extends TypeAction
{
	/**
	 * The Schema.org Type Scope
	 *
	 * @var string
	 */
	protected static $scope = 'https://schema.org/TradeAction';

	/**
	 * The offer price of a product, or of a price component when attached to PriceSpecification and its subtypes.
	 * Expected Type: Number, Text
	 * 
	 * @var	array
	 */
	protected static $price = array('value' => 'price',
		'expectedTypes' => array('Number', 'Text')
	);

	/**
	 * Return the 'price' Property value
	 *
	 * @return	string
	 */
	public static function pPrice()
	{
		return self::getValue(self::$price);
	}
}
