<?php
/**
 * An order is a confirmation of a transaction (a receipt), which can contain multiple line items, each represented by an Offer that has been accepted by the customer.
 *
 * @see    http://schema.org/Order
*/
abstract class TypeOrder extends TypeIntangible
{
	/**
	 * The Schema.org Type Scope
	 *
	 * @var string
	 */
	protected static $scope = 'https://schema.org/Order';

	/**
	 * The offer(s) -- e.g., product, quantity and price combinations -- included in the order.
	 * Expected Type: Offer
	 * 
	 * @var	array
	 */
	protected static $acceptedOffer = array('value' => 'acceptedOffer',
		'expectedTypes' => array('Offer')
	);

	/**
	 * The billing address for the order.
	 * Expected Type: PostalAddress
	 * 
	 * @var	array
	 */
	protected static $billingAddress = array('value' => 'billingAddress',
		'expectedTypes' => array('PostalAddress')
	);

	/**
	 * A number that confirms the given order.
	 * Expected Type: Text
	 * 
	 * @var	array
	 */
	protected static $confirmationNumber = array('value' => 'confirmationNumber',
		'expectedTypes' => array('Text')
	);

	/**
	 * Party placing the order.
	 * Expected Type: Person, Organization
	 * 
	 * @var	array
	 */
	protected static $customer = array('value' => 'customer',
		'expectedTypes' => array('Person', 'Organization')
	);

	/**
	 * Any discount applied (to an Order).
	 * Expected Type: Text, Number
	 * 
	 * @var	array
	 */
	protected static $discount = array('value' => 'discount',
		'expectedTypes' => array('Text', 'Number')
	);

	/**
	 * Code used to redeem a discount.
	 * Expected Type: Text
	 * 
	 * @var	array
	 */
	protected static $discountCode = array('value' => 'discountCode',
		'expectedTypes' => array('Text')
	);

	/**
	 * The currency (in 3-letter ISO 4217 format) of the discount.
	 * Expected Type: Text
	 * 
	 * @var	array
	 */
	protected static $discountCurrency = array('value' => 'discountCurrency',
		'expectedTypes' => array('Text')
	);

	/**
	 * Was the offer accepted as a gift for someone other than the buyer.
	 * Expected Type: Boolean
	 * 
	 * @var	array
	 */
	protected static $isGift = array('value' => 'isGift',
		'expectedTypes' => array('Boolean')
	);

	/**
	 * The party taking the order (e.g. Amazon.com is a merchant for many sellers).
	 * Expected Type: Person, Organization
	 * 
	 * @var	array
	 */
	protected static $merchant = array('value' => 'merchant',
		'expectedTypes' => array('Person', 'Organization')
	);

	/**
	 * Date order was placed.
	 * Expected Type: DateTime
	 * 
	 * @var	array
	 */
	protected static $orderDate = array('value' => 'orderDate',
		'expectedTypes' => array('DateTime')
	);

	/**
	 * The identifier of the transaction.
	 * Expected Type: Text
	 * 
	 * @var	array
	 */
	protected static $orderNumber = array('value' => 'orderNumber',
		'expectedTypes' => array('Text')
	);

	/**
	 * The current status of the order.
	 * Expected Type: OrderStatus
	 * 
	 * @var	array
	 */
	protected static $orderStatus = array('value' => 'orderStatus',
		'expectedTypes' => array('OrderStatus')
	);

	/**
	 * The item ordered.
	 * Expected Type: Product
	 * 
	 * @var	array
	 */
	protected static $orderedItem = array('value' => 'orderedItem',
		'expectedTypes' => array('Product')
	);

	/**
	 * The date that payment is due.
	 * Expected Type: DateTime
	 * 
	 * @var	array
	 */
	protected static $paymentDue = array('value' => 'paymentDue',
		'expectedTypes' => array('DateTime')
	);

	/**
	 * The name of the credit card or other method of payment for the order.
	 * Expected Type: PaymentMethod
	 * 
	 * @var	array
	 */
	protected static $paymentMethod = array('value' => 'paymentMethod',
		'expectedTypes' => array('PaymentMethod')
	);

	/**
	 * An identifier for the method of payment used (e.g. the last 4 digits of the credit card).
	 * Expected Type: Text
	 * 
	 * @var	array
	 */
	protected static $paymentMethodId = array('value' => 'paymentMethodId',
		'expectedTypes' => array('Text')
	);

	/**
	 * The URL for sending a payment.
	 * Expected Type: URL
	 * 
	 * @var	array
	 */
	protected static $paymentUrl = array('value' => 'paymentUrl',
		'expectedTypes' => array('URL')
	);

	/**
	 * Return the 'acceptedOffer' Property value
	 *
	 * @return	string
	 */
	public static function pAcceptedOffer()
	{
		return self::getValue(self::$acceptedOffer);
	}

	/**
	 * Return the 'billingAddress' Property value
	 *
	 * @return	string
	 */
	public static function pBillingAddress()
	{
		return self::getValue(self::$billingAddress);
	}

	/**
	 * Return the 'confirmationNumber' Property value
	 *
	 * @return	string
	 */
	public static function pConfirmationNumber()
	{
		return self::getValue(self::$confirmationNumber);
	}

	/**
	 * Return the 'customer' Property value
	 *
	 * @return	string
	 */
	public static function pCustomer()
	{
		return self::getValue(self::$customer);
	}

	/**
	 * Return the 'discount' Property value
	 *
	 * @return	string
	 */
	public static function pDiscount()
	{
		return self::getValue(self::$discount);
	}

	/**
	 * Return the 'discountCode' Property value
	 *
	 * @return	string
	 */
	public static function pDiscountCode()
	{
		return self::getValue(self::$discountCode);
	}

	/**
	 * Return the 'discountCurrency' Property value
	 *
	 * @return	string
	 */
	public static function pDiscountCurrency()
	{
		return self::getValue(self::$discountCurrency);
	}

	/**
	 * Return the 'isGift' Property value
	 *
	 * @return	string
	 */
	public static function pIsGift()
	{
		return self::getValue(self::$isGift);
	}

	/**
	 * Return the 'merchant' Property value
	 *
	 * @return	string
	 */
	public static function pMerchant()
	{
		return self::getValue(self::$merchant);
	}

	/**
	 * Return the 'orderDate' Property value
	 *
	 * @return	string
	 */
	public static function pOrderDate()
	{
		return self::getValue(self::$orderDate);
	}

	/**
	 * Return the 'orderNumber' Property value
	 *
	 * @return	string
	 */
	public static function pOrderNumber()
	{
		return self::getValue(self::$orderNumber);
	}

	/**
	 * Return the 'orderStatus' Property value
	 *
	 * @return	string
	 */
	public static function pOrderStatus()
	{
		return self::getValue(self::$orderStatus);
	}

	/**
	 * Return the 'orderedItem' Property value
	 *
	 * @return	string
	 */
	public static function pOrderedItem()
	{
		return self::getValue(self::$orderedItem);
	}

	/**
	 * Return the 'paymentDue' Property value
	 *
	 * @return	string
	 */
	public static function pPaymentDue()
	{
		return self::getValue(self::$paymentDue);
	}

	/**
	 * Return the 'paymentMethod' Property value
	 *
	 * @return	string
	 */
	public static function pPaymentMethod()
	{
		return self::getValue(self::$paymentMethod);
	}

	/**
	 * Return the 'paymentMethodId' Property value
	 *
	 * @return	string
	 */
	public static function pPaymentMethodId()
	{
		return self::getValue(self::$paymentMethodId);
	}

	/**
	 * Return the 'paymentUrl' Property value
	 *
	 * @return	string
	 */
	public static function pPaymentUrl()
	{
		return self::getValue(self::$paymentUrl);
	}
}
