<?php
/**
 * The costs of settling the payment using a particular payment method.
 *
 * @see    http://schema.org/PaymentChargeSpecification
*/
abstract class TypePaymentChargeSpecification extends TypePriceSpecification
{
	/**
	 * The Schema.org Type Scope
	 *
	 * @var string
	 */
	protected static $scope = 'https://schema.org/PaymentChargeSpecification';

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
	 * The payment method(s) to which the payment charge specification applies.
	 * Expected Type: PaymentMethod
	 * 
	 * @var	array
	 */
	protected static $appliesToPaymentMethod = array('value' => 'appliesToPaymentMethod',
		'expectedTypes' => array('PaymentMethod')
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
	 * Return the 'appliesToPaymentMethod' Property value
	 *
	 * @return	string
	 */
	public static function pAppliesToPaymentMethod()
	{
		return self::getValue(self::$appliesToPaymentMethod);
	}
}
