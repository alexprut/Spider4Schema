<?php
/**
 * The price asked for a given offer by the respective organization or person.
 *
 * @see    http://schema.org/UnitPriceSpecification
 * @since  1.0
*/
abstract class TypeUnitPriceSpecification extends TypePriceSpecification
{
	/**
	 * The Schema.org Type Scope
	 *
	 * @var string
	 */
	protected static $scope = 'https://schema.org/UnitPriceSpecification';

	/**
	 * This property specifies the minimal quantity and rounding increment that will be the basis for the billing. The unit of measurement is specified by the unitCode property.
	 * Expected Type: Number
	 * 
	 * @var	array
	 */
	protected static $billingIncrement = array('value' => 'billingIncrement',
		'expectedTypes' => array('Number')
	);

	/**
	 * A short text or acronym indicating multiple price specifications for the same offer, e.g. SRP for the suggested retail price or INVOICE for the invoice price, mostly used in the car industry.
	 * Expected Type: Text
	 * 
	 * @var	array
	 */
	protected static $priceType = array('value' => 'priceType',
		'expectedTypes' => array('Text')
	);

	/**
	 * The unit of measurement given using the UN/CEFACT Common Code (3 characters).
	 * Expected Type: Text
	 * 
	 * @var	array
	 */
	protected static $unitCode = array('value' => 'unitCode',
		'expectedTypes' => array('Text')
	);

	/**
	 * Return the 'billingIncrement' Property value
	 *
	 * @return	string
	 */
	public static function pBillingIncrement()
	{
		return self::getValue(self::$billingIncrement);
	}

	/**
	 * Return the 'priceType' Property value
	 *
	 * @return	string
	 */
	public static function pPriceType()
	{
		return self::getValue(self::$priceType);
	}

	/**
	 * Return the 'unitCode' Property value
	 *
	 * @return	string
	 */
	public static function pUnitCode()
	{
		return self::getValue(self::$unitCode);
	}
}
