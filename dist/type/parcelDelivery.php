<?php
/**
 * The delivery of a parcel either via the postal service or a commercial service.
 *
 * @see    http://schema.org/ParcelDelivery
*/
abstract class TypeParcelDelivery extends TypeIntangible
{
	/**
	 * The Schema.org Type Scope
	 *
	 * @var string
	 */
	protected static $scope = 'https://schema.org/ParcelDelivery';

	/**
	 * Destination address.
	 * Expected Type: PostalAddress
	 * 
	 * @var	array
	 */
	protected static $deliveryAddress = array('value' => 'deliveryAddress',
		'expectedTypes' => array('PostalAddress')
	);

	/**
	 * New entry added as the package passes through each leg of its journey (from shipment to final delivery).
	 * Expected Type: DeliveryEvent
	 * 
	 * @var	array
	 */
	protected static $deliveryStatus = array('value' => 'deliveryStatus',
		'expectedTypes' => array('DeliveryEvent')
	);

	/**
	 * The earliest date the package may arrive.
	 * Expected Type: DateTime
	 * 
	 * @var	array
	 */
	protected static $expectedArrivalFrom = array('value' => 'expectedArrivalFrom',
		'expectedTypes' => array('DateTime')
	);

	/**
	 * The latest date the package may arrive.
	 * Expected Type: DateTime
	 * 
	 * @var	array
	 */
	protected static $expectedArrivalUntil = array('value' => 'expectedArrivalUntil',
		'expectedTypes' => array('DateTime')
	);

	/**
	 * Method used for delivery or shipping.
	 * Expected Type: DeliveryMethod
	 * 
	 * @var	array
	 */
	protected static $hasDeliveryMethod = array('value' => 'hasDeliveryMethod',
		'expectedTypes' => array('DeliveryMethod')
	);

	/**
	 * Item(s) being shipped.
	 * Expected Type: Product
	 * 
	 * @var	array
	 */
	protected static $itemShipped = array('value' => 'itemShipped',
		'expectedTypes' => array('Product')
	);

	/**
	 * Shipper's address.
	 * Expected Type: PostalAddress
	 * 
	 * @var	array
	 */
	protected static $originAddress = array('value' => 'originAddress',
		'expectedTypes' => array('PostalAddress')
	);

	/**
	 * The overall order the items in this delivery were included in.
	 * Expected Type: Order
	 * 
	 * @var	array
	 */
	protected static $partOfOrder = array('value' => 'partOfOrder',
		'expectedTypes' => array('Order')
	);

	/**
	 * The service provider, service operator, or service performer; the goods producer. Another party (a seller) may offer those services or goods on behalf of the provider. A provider may also serve as the seller. Supersedes carrier.
	 * Expected Type: Person, Organization
	 * 
	 * @var	array
	 */
	protected static $provider = array('value' => 'provider',
		'expectedTypes' => array('Person', 'Organization')
	);

	/**
	 * Shipper tracking number.
	 * Expected Type: Text
	 * 
	 * @var	array
	 */
	protected static $trackingNumber = array('value' => 'trackingNumber',
		'expectedTypes' => array('Text')
	);

	/**
	 * Tracking url for the parcel delivery.
	 * Expected Type: URL
	 * 
	 * @var	array
	 */
	protected static $trackingUrl = array('value' => 'trackingUrl',
		'expectedTypes' => array('URL')
	);

	/**
	 * Return the 'deliveryAddress' Property value
	 *
	 * @return	string
	 */
	public static function pDeliveryAddress()
	{
		return self::getValue(self::$deliveryAddress);
	}

	/**
	 * Return the 'deliveryStatus' Property value
	 *
	 * @return	string
	 */
	public static function pDeliveryStatus()
	{
		return self::getValue(self::$deliveryStatus);
	}

	/**
	 * Return the 'expectedArrivalFrom' Property value
	 *
	 * @return	string
	 */
	public static function pExpectedArrivalFrom()
	{
		return self::getValue(self::$expectedArrivalFrom);
	}

	/**
	 * Return the 'expectedArrivalUntil' Property value
	 *
	 * @return	string
	 */
	public static function pExpectedArrivalUntil()
	{
		return self::getValue(self::$expectedArrivalUntil);
	}

	/**
	 * Return the 'hasDeliveryMethod' Property value
	 *
	 * @return	string
	 */
	public static function pHasDeliveryMethod()
	{
		return self::getValue(self::$hasDeliveryMethod);
	}

	/**
	 * Return the 'itemShipped' Property value
	 *
	 * @return	string
	 */
	public static function pItemShipped()
	{
		return self::getValue(self::$itemShipped);
	}

	/**
	 * Return the 'originAddress' Property value
	 *
	 * @return	string
	 */
	public static function pOriginAddress()
	{
		return self::getValue(self::$originAddress);
	}

	/**
	 * Return the 'partOfOrder' Property value
	 *
	 * @return	string
	 */
	public static function pPartOfOrder()
	{
		return self::getValue(self::$partOfOrder);
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
	 * Return the 'trackingNumber' Property value
	 *
	 * @return	string
	 */
	public static function pTrackingNumber()
	{
		return self::getValue(self::$trackingNumber);
	}

	/**
	 * Return the 'trackingUrl' Property value
	 *
	 * @return	string
	 */
	public static function pTrackingUrl()
	{
		return self::getValue(self::$trackingUrl);
	}
}
