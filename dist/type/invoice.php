<?php
/**
 * A statement of the money due for goods or services; a bill.
 *
 * @see    http://schema.org/Invoice
*/
abstract class TypeInvoice extends TypeIntangible
{
	/**
	 * The Schema.org Type Scope
	 *
	 * @var string
	 */
	protected static $scope = 'https://schema.org/Invoice';

	/**
	 * The identifier for the account the payment will be applied to.
	 * Expected Type: Text
	 * 
	 * @var	array
	 */
	protected static $accountId = array('value' => 'accountId',
		'expectedTypes' => array('Text')
	);

	/**
	 * The time interval used to compute the invoice.
	 * Expected Type: Duration
	 * 
	 * @var	array
	 */
	protected static $billingPeriod = array('value' => 'billingPeriod',
		'expectedTypes' => array('Duration')
	);

	/**
	 * An entity that arranges for an exchange between a buyer and a seller. In most cases a broker never acquires or releases ownership of a product or service involved in an exchange. If it is not clear whether an entity is a broker, seller, or buyer, the latter two terms are preferred. Supersedes bookingAgent.
	 * Expected Type: Organization, Person
	 * 
	 * @var	array
	 */
	protected static $broker = array('value' => 'broker',
		'expectedTypes' => array('Organization', 'Person')
	);

	/**
	 * A category for the item. Greater signs or slashes can be used to informally indicate a category hierarchy.
	 * Expected Type: Text, Thing, PhysicalActivityCategory
	 * 
	 * @var	array
	 */
	protected static $category = array('value' => 'category',
		'expectedTypes' => array('Text', 'Thing', 'PhysicalActivityCategory')
	);

	/**
	 * A number that confirms the given order or payment has been received.
	 * Expected Type: Text
	 * 
	 * @var	array
	 */
	protected static $confirmationNumber = array('value' => 'confirmationNumber',
		'expectedTypes' => array('Text')
	);

	/**
	 * Party placing the order or paying the invoice.
	 * Expected Type: Organization, Person
	 * 
	 * @var	array
	 */
	protected static $customer = array('value' => 'customer',
		'expectedTypes' => array('Organization', 'Person')
	);

	/**
	 * The minimum payment required at this time.
	 * Expected Type: PriceSpecification
	 * 
	 * @var	array
	 */
	protected static $minimumPaymentDue = array('value' => 'minimumPaymentDue',
		'expectedTypes' => array('PriceSpecification')
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
	 * The status of payment; whether the invoice has been paid or not.
	 * Expected Type: Text
	 * 
	 * @var	array
	 */
	protected static $paymentStatus = array('value' => 'paymentStatus',
		'expectedTypes' => array('Text')
	);

	/**
	 * The service provider, service operator, or service performer; the goods producer. Another party (a seller) may offer those services or goods on behalf of the provider. A provider may also serve as the seller. Supersedes carrier.
	 * Expected Type: Organization, Person
	 * 
	 * @var	array
	 */
	protected static $provider = array('value' => 'provider',
		'expectedTypes' => array('Organization', 'Person')
	);

	/**
	 * The Order(s) related to this Invoice. One or more Orders may be combined into a single Invoice.
	 * Expected Type: Order
	 * 
	 * @var	array
	 */
	protected static $referencesOrder = array('value' => 'referencesOrder',
		'expectedTypes' => array('Order')
	);

	/**
	 * The date the invoice is scheduled to be paid.
	 * Expected Type: Date
	 * 
	 * @var	array
	 */
	protected static $scheduledPaymentDate = array('value' => 'scheduledPaymentDate',
		'expectedTypes' => array('Date')
	);

	/**
	 * The total amount due.
	 * Expected Type: PriceSpecification
	 * 
	 * @var	array
	 */
	protected static $totalPaymentDue = array('value' => 'totalPaymentDue',
		'expectedTypes' => array('PriceSpecification')
	);

	/**
	 * Return the 'accountId' Property value
	 *
	 * @return	string
	 */
	public static function pAccountId()
	{
		return self::getValue(self::$accountId);
	}

	/**
	 * Return the 'billingPeriod' Property value
	 *
	 * @return	string
	 */
	public static function pBillingPeriod()
	{
		return self::getValue(self::$billingPeriod);
	}

	/**
	 * Return the 'broker' Property value
	 *
	 * @return	string
	 */
	public static function pBroker()
	{
		return self::getValue(self::$broker);
	}

	/**
	 * Return the 'category' Property value
	 *
	 * @return	string
	 */
	public static function pCategory()
	{
		return self::getValue(self::$category);
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
	 * Return the 'minimumPaymentDue' Property value
	 *
	 * @return	string
	 */
	public static function pMinimumPaymentDue()
	{
		return self::getValue(self::$minimumPaymentDue);
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
	 * Return the 'paymentStatus' Property value
	 *
	 * @return	string
	 */
	public static function pPaymentStatus()
	{
		return self::getValue(self::$paymentStatus);
	}

	/**
	 * Return the 'provider' Property value
	 *
	 * @return	string
	 */
	public static function pProvider()
	{
		return self::getValue(self::$provider);
	}

	/**
	 * Return the 'referencesOrder' Property value
	 *
	 * @return	string
	 */
	public static function pReferencesOrder()
	{
		return self::getValue(self::$referencesOrder);
	}

	/**
	 * Return the 'scheduledPaymentDate' Property value
	 *
	 * @return	string
	 */
	public static function pScheduledPaymentDate()
	{
		return self::getValue(self::$scheduledPaymentDate);
	}

	/**
	 * Return the 'totalPaymentDue' Property value
	 *
	 * @return	string
	 */
	public static function pTotalPaymentDue()
	{
		return self::getValue(self::$totalPaymentDue);
	}
}
