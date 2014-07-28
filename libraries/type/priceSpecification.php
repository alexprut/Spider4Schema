<?php
/**
 * A structured value representing a monetary amount. Typically, only the subclasses of this type are used for markup.
 *
 * @see    http://schema.org/PriceSpecification
*/
abstract class TypePriceSpecification extends TypeStructuredValue
{
	/**
	 * The Schema.org Type Scope
	 *
	 * @var string
	 */
	protected static $scope = 'https://schema.org/PriceSpecification';

	/**
	 * The interval and unit of measurement of ordering quantities for which the offer or price specification is valid. This allows e.g. specifying that a certain freight charge is valid only for a certain quantity.
	 * Expected Type: QuantitativeValue
	 * 
	 * @var	array
	 */
	protected static $eligibleQuantity = array('value' => 'eligibleQuantity',
		'expectedTypes' => array('QuantitativeValue')
	);

	/**
	 * The transaction volume, in a monetary unit, for which the offer or price specification is valid, e.g. for indicating a minimal purchasing volume, to express free shipping above a certain order volume, or to limit the acceptance of credit cards to purchases to a certain minimal amount.
	 * Expected Type: PriceSpecification
	 * 
	 * @var	array
	 */
	protected static $eligibleTransactionVolume = array('value' => 'eligibleTransactionVolume',
		'expectedTypes' => array('PriceSpecification')
	);

	/**
	 * The highest price if the price is a range.
	 * Expected Type: Number
	 * 
	 * @var	array
	 */
	protected static $maxPrice = array('value' => 'maxPrice',
		'expectedTypes' => array('Number')
	);

	/**
	 * The lowest price if the price is a range.
	 * Expected Type: Number
	 * 
	 * @var	array
	 */
	protected static $minPrice = array('value' => 'minPrice',
		'expectedTypes' => array('Number')
	);

	/**
	 * The offer price of a product, or of a price component when attached to PriceSpecification and its subtypes.
	 * Expected Type: Text, Number
	 * 
	 * @var	array
	 */
	protected static $price = array('value' => 'price',
		'expectedTypes' => array('Text', 'Number')
	);

	/**
	 * The currency (in 3-letter ISO 4217 format) of the price or a price component, when attached to PriceSpecification and its subtypes.
	 * Expected Type: Text
	 * 
	 * @var	array
	 */
	protected static $priceCurrency = array('value' => 'priceCurrency',
		'expectedTypes' => array('Text')
	);

	/**
	 * The date when the item becomes valid.
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
	 * Specifies whether the applicable value-added tax (VAT) is included in the price specification or not.
	 * Expected Type: Boolean
	 * 
	 * @var	array
	 */
	protected static $valueAddedTaxIncluded = array('value' => 'valueAddedTaxIncluded',
		'expectedTypes' => array('Boolean')
	);

	/**
	 * Return the 'eligibleQuantity' Property value
	 *
	 * @return	string
	 */
	public static function pEligibleQuantity()
	{
		return self::getValue(self::$eligibleQuantity);
	}

	/**
	 * Return the 'eligibleTransactionVolume' Property value
	 *
	 * @return	string
	 */
	public static function pEligibleTransactionVolume()
	{
		return self::getValue(self::$eligibleTransactionVolume);
	}

	/**
	 * Return the 'maxPrice' Property value
	 *
	 * @return	string
	 */
	public static function pMaxPrice()
	{
		return self::getValue(self::$maxPrice);
	}

	/**
	 * Return the 'minPrice' Property value
	 *
	 * @return	string
	 */
	public static function pMinPrice()
	{
		return self::getValue(self::$minPrice);
	}

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
	 * Return the 'priceCurrency' Property value
	 *
	 * @return	string
	 */
	public static function pPriceCurrency()
	{
		return self::getValue(self::$priceCurrency);
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

	/**
	 * Return the 'valueAddedTaxIncluded' Property value
	 *
	 * @return	string
	 */
	public static function pValueAddedTaxIncluded()
	{
		return self::getValue(self::$valueAddedTaxIncluded);
	}
}
