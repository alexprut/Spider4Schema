<?php
/**
 * The price for the delivery of an offer using a particular delivery method.
 *
 * @see    http://schema.org/DeliveryChargeSpecification
*/
abstract class TypeDeliveryChargeSpecification extends TypePriceSpecification
{
	/**
	 * The Schema.org Type Scope
	 *
	 * @var string
	 */
	protected static $scope = 'https://schema.org/DeliveryChargeSpecification';

	/**
	 * The delivery method(s) to which the delivery charge or payment charge specification applies.
	 * Expected Type: DeliveryMethod
	 * 
	 * @var	array
	 */
	protected static $appliesToDeliveryMethod = array('value' => 'appliesToDeliveryMethod',
		'expectedTypes' => array('DeliveryMethod')
	);

	/**
	 * The ISO 3166-1 (ISO 3166-1 alpha-2) or ISO 3166-2 code, or the GeoShape for the geo-political region(s) for which the offer or delivery charge specification is valid.
	 * Expected Type: Text, GeoShape
	 * 
	 * @var	array
	 */
	protected static $eligibleRegion = array('value' => 'eligibleRegion',
		'expectedTypes' => array('Text', 'GeoShape')
	);

	/**
	 * Return the 'appliesToDeliveryMethod' Property value
	 *
	 * @return	string
	 */
	public static function pAppliesToDeliveryMethod()
	{
		return self::getValue(self::$appliesToDeliveryMethod);
	}

	/**
	 * Return the 'eligibleRegion' Property value
	 *
	 * @return	string
	 */
	public static function pEligibleRegion()
	{
		return self::getValue(self::$eligibleRegion);
	}
}
