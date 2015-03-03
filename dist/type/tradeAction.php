<?php
/**
 * The act of participating in an exchange of goods and services for monetary compensation. An agent trades an object, product or service with a participant in exchange for a one time or periodic payment.
 *
 * @see    http://schema.org/TradeAction
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
	 * The offer price of a product, or of a price component when attached to PriceSpecification and its subtypes. Usage guidelines: Use the priceCurrency property (with ISO 4217 codes e.g. "USD") instead of including ambiguous symbols such as '$' in the value. Use '.' (Unicode 'FULL STOP' (U+002E)) rather than ',' to indicate a decimal point. Avoid using these symbols as a readability separator. Note that both RDFa and Microdata syntax allow the use of a "content=" attribute for publishing simple machine-readable values alongside more human-friendly formatting. Use values from 0123456789 (Unicode 'DIGIT ZERO' (U+0030) to 'DIGIT NINE' (U+0039)) rather than superficially similiar Unicode symbols.
	 * Expected Type: Text, Number
	 * 
	 * @var	array
	 */
	protected static $price = array('value' => 'price',
		'expectedTypes' => array('Text', 'Number')
	);

	/**
	 * One or more detailed price specifications, indicating the unit price and delivery or payment charges.
	 * Expected Type: PriceSpecification
	 * 
	 * @var	array
	 */
	protected static $priceSpecification = array('value' => 'priceSpecification',
		'expectedTypes' => array('PriceSpecification')
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

	/**
	 * Return the 'priceSpecification' Property value
	 *
	 * @return	string
	 */
	public static function pPriceSpecification()
	{
		return self::getValue(self::$priceSpecification);
	}
}
