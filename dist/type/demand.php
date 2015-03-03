<?php
/**
 * A demand entity represents the public, not necessarily binding, not necessarily exclusive, announcement by an organization or person to seek a certain type of goods or services. For describing demand using this type, the very same properties used for Offer apply.
 *
 * @see    http://schema.org/Demand
*/
abstract class TypeDemand extends TypeIntangible
{
	/**
	 * The Schema.org Type Scope
	 *
	 * @var string
	 */
	protected static $scope = 'https://schema.org/Demand';

	/**
	 * The payment method(s) accepted by seller for this offer.
	 * Expected Type: PaymentMethod
	 * 
	 * @var	array
	 */
	protected static $acceptedPaymentMethod = array('value' => 'acceptedPaymentMethod',
		'expectedTypes' => array('PaymentMethod')
	);

	/**
	 * The amount of time that is required between accepting the offer and the actual usage of the resource or service.
	 * Expected Type: QuantitativeValue
	 * 
	 * @var	array
	 */
	protected static $advanceBookingRequirement = array('value' => 'advanceBookingRequirement',
		'expectedTypes' => array('QuantitativeValue')
	);

	/**
	 * The availability of this item—for example In stock, Out of stock, Pre-order, etc.
	 * Expected Type: ItemAvailability
	 * 
	 * @var	array
	 */
	protected static $availability = array('value' => 'availability',
		'expectedTypes' => array('ItemAvailability')
	);

	/**
	 * The end of the availability of the product or service included in the offer.
	 * Expected Type: DateTime
	 * 
	 * @var	array
	 */
	protected static $availabilityEnds = array('value' => 'availabilityEnds',
		'expectedTypes' => array('DateTime')
	);

	/**
	 * The beginning of the availability of the product or service included in the offer.
	 * Expected Type: DateTime
	 * 
	 * @var	array
	 */
	protected static $availabilityStarts = array('value' => 'availabilityStarts',
		'expectedTypes' => array('DateTime')
	);

	/**
	 * The place(s) from which the offer can be obtained (e.g. store locations).
	 * Expected Type: Place
	 * 
	 * @var	array
	 */
	protected static $availableAtOrFrom = array('value' => 'availableAtOrFrom',
		'expectedTypes' => array('Place')
	);

	/**
	 * The delivery method(s) available for this offer.
	 * Expected Type: DeliveryMethod
	 * 
	 * @var	array
	 */
	protected static $availableDeliveryMethod = array('value' => 'availableDeliveryMethod',
		'expectedTypes' => array('DeliveryMethod')
	);

	/**
	 * The business function (e.g. sell, lease, repair, dispose) of the offer or component of a bundle (TypeAndQuantityNode). The default is http://purl.org/goodrelations/v1#Sell.
	 * Expected Type: BusinessFunction
	 * 
	 * @var	array
	 */
	protected static $businessFunction = array('value' => 'businessFunction',
		'expectedTypes' => array('BusinessFunction')
	);

	/**
	 * The typical delay between the receipt of the order and the goods leaving the warehouse.
	 * Expected Type: QuantitativeValue
	 * 
	 * @var	array
	 */
	protected static $deliveryLeadTime = array('value' => 'deliveryLeadTime',
		'expectedTypes' => array('QuantitativeValue')
	);

	/**
	 * The type(s) of customers for which the given offer is valid.
	 * Expected Type: BusinessEntityType
	 * 
	 * @var	array
	 */
	protected static $eligibleCustomerType = array('value' => 'eligibleCustomerType',
		'expectedTypes' => array('BusinessEntityType')
	);

	/**
	 * The duration for which the given offer is valid.
	 * Expected Type: QuantitativeValue
	 * 
	 * @var	array
	 */
	protected static $eligibleDuration = array('value' => 'eligibleDuration',
		'expectedTypes' => array('QuantitativeValue')
	);

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
	 * The ISO 3166-1 (ISO 3166-1 alpha-2) or ISO 3166-2 code, or the GeoShape for the geo-political region(s) for which the offer or delivery charge specification is valid.
	 * Expected Type: Text, GeoShape
	 * 
	 * @var	array
	 */
	protected static $eligibleRegion = array('value' => 'eligibleRegion',
		'expectedTypes' => array('Text', 'GeoShape')
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
	 * The GTIN-13 code of the product, or the product to which the offer refers. This is equivalent to 13-digit ISBN codes and EAN UCC-13. Former 12-digit UPC codes can be converted into a GTIN-13 code by simply adding a preceeding zero. See GS1 GTIN Summary for more details.
	 * Expected Type: Text
	 * 
	 * @var	array
	 */
	protected static $gtin13 = array('value' => 'gtin13',
		'expectedTypes' => array('Text')
	);

	/**
	 * The GTIN-14 code of the product, or the product to which the offer refers. See GS1 GTIN Summary for more details.
	 * Expected Type: Text
	 * 
	 * @var	array
	 */
	protected static $gtin14 = array('value' => 'gtin14',
		'expectedTypes' => array('Text')
	);

	/**
	 * The GTIN-8 code of the product, or the product to which the offer refers. This code is also known as EAN/UCC-8 or 8-digit EAN. See GS1 GTIN Summary for more details.
	 * Expected Type: Text
	 * 
	 * @var	array
	 */
	protected static $gtin8 = array('value' => 'gtin8',
		'expectedTypes' => array('Text')
	);

	/**
	 * This links to a node or nodes indicating the exact quantity of the products included in the offer.
	 * Expected Type: TypeAndQuantityNode
	 * 
	 * @var	array
	 */
	protected static $includesObject = array('value' => 'includesObject',
		'expectedTypes' => array('TypeAndQuantityNode')
	);

	/**
	 * The current approximate inventory level for the item or items.
	 * Expected Type: QuantitativeValue
	 * 
	 * @var	array
	 */
	protected static $inventoryLevel = array('value' => 'inventoryLevel',
		'expectedTypes' => array('QuantitativeValue')
	);

	/**
	 * A predefined value from OfferItemCondition or a textual description of the condition of the product or service, or the products or services included in the offer.
	 * Expected Type: OfferItemCondition
	 * 
	 * @var	array
	 */
	protected static $itemCondition = array('value' => 'itemCondition',
		'expectedTypes' => array('OfferItemCondition')
	);

	/**
	 * The item being offered.
	 * Expected Type: Product
	 * 
	 * @var	array
	 */
	protected static $itemOffered = array('value' => 'itemOffered',
		'expectedTypes' => array('Product')
	);

	/**
	 * The Manufacturer Part Number (MPN) of the product, or the product to which the offer refers.
	 * Expected Type: Text
	 * 
	 * @var	array
	 */
	protected static $mpn = array('value' => 'mpn',
		'expectedTypes' => array('Text')
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
	 * An entity which offers (sells / leases / lends / loans) the services / goods. A seller may also be a provider. Supersedes merchant, vendor.
	 * Expected Type: Person, Organization
	 * 
	 * @var	array
	 */
	protected static $seller = array('value' => 'seller',
		'expectedTypes' => array('Person', 'Organization')
	);

	/**
	 * The serial number or any alphanumeric identifier of a particular product. When attached to an offer, it is a shortcut for the serial number of the product included in the offer.
	 * Expected Type: Text
	 * 
	 * @var	array
	 */
	protected static $serialNumber = array('value' => 'serialNumber',
		'expectedTypes' => array('Text')
	);

	/**
	 * The Stock Keeping Unit (SKU), i.e. a merchant-specific identifier for a product or service, or the product to which the offer refers.
	 * Expected Type: Text
	 * 
	 * @var	array
	 */
	protected static $sku = array('value' => 'sku',
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
	 * The warranty promise(s) included in the offer.
	 * Expected Type: WarrantyPromise
	 * 
	 * @var	array
	 */
	protected static $warranty = array('value' => 'warranty',
		'expectedTypes' => array('WarrantyPromise')
	);

	/**
	 * Return the 'acceptedPaymentMethod' Property value
	 *
	 * @return	string
	 */
	public static function pAcceptedPaymentMethod()
	{
		return self::getValue(self::$acceptedPaymentMethod);
	}

	/**
	 * Return the 'advanceBookingRequirement' Property value
	 *
	 * @return	string
	 */
	public static function pAdvanceBookingRequirement()
	{
		return self::getValue(self::$advanceBookingRequirement);
	}

	/**
	 * Return the 'availability' Property value
	 *
	 * @return	string
	 */
	public static function pAvailability()
	{
		return self::getValue(self::$availability);
	}

	/**
	 * Return the 'availabilityEnds' Property value
	 *
	 * @return	string
	 */
	public static function pAvailabilityEnds()
	{
		return self::getValue(self::$availabilityEnds);
	}

	/**
	 * Return the 'availabilityStarts' Property value
	 *
	 * @return	string
	 */
	public static function pAvailabilityStarts()
	{
		return self::getValue(self::$availabilityStarts);
	}

	/**
	 * Return the 'availableAtOrFrom' Property value
	 *
	 * @return	string
	 */
	public static function pAvailableAtOrFrom()
	{
		return self::getValue(self::$availableAtOrFrom);
	}

	/**
	 * Return the 'availableDeliveryMethod' Property value
	 *
	 * @return	string
	 */
	public static function pAvailableDeliveryMethod()
	{
		return self::getValue(self::$availableDeliveryMethod);
	}

	/**
	 * Return the 'businessFunction' Property value
	 *
	 * @return	string
	 */
	public static function pBusinessFunction()
	{
		return self::getValue(self::$businessFunction);
	}

	/**
	 * Return the 'deliveryLeadTime' Property value
	 *
	 * @return	string
	 */
	public static function pDeliveryLeadTime()
	{
		return self::getValue(self::$deliveryLeadTime);
	}

	/**
	 * Return the 'eligibleCustomerType' Property value
	 *
	 * @return	string
	 */
	public static function pEligibleCustomerType()
	{
		return self::getValue(self::$eligibleCustomerType);
	}

	/**
	 * Return the 'eligibleDuration' Property value
	 *
	 * @return	string
	 */
	public static function pEligibleDuration()
	{
		return self::getValue(self::$eligibleDuration);
	}

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
	 * Return the 'eligibleRegion' Property value
	 *
	 * @return	string
	 */
	public static function pEligibleRegion()
	{
		return self::getValue(self::$eligibleRegion);
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
	 * Return the 'gtin13' Property value
	 *
	 * @return	string
	 */
	public static function pGtin13()
	{
		return self::getValue(self::$gtin13);
	}

	/**
	 * Return the 'gtin14' Property value
	 *
	 * @return	string
	 */
	public static function pGtin14()
	{
		return self::getValue(self::$gtin14);
	}

	/**
	 * Return the 'gtin8' Property value
	 *
	 * @return	string
	 */
	public static function pGtin8()
	{
		return self::getValue(self::$gtin8);
	}

	/**
	 * Return the 'includesObject' Property value
	 *
	 * @return	string
	 */
	public static function pIncludesObject()
	{
		return self::getValue(self::$includesObject);
	}

	/**
	 * Return the 'inventoryLevel' Property value
	 *
	 * @return	string
	 */
	public static function pInventoryLevel()
	{
		return self::getValue(self::$inventoryLevel);
	}

	/**
	 * Return the 'itemCondition' Property value
	 *
	 * @return	string
	 */
	public static function pItemCondition()
	{
		return self::getValue(self::$itemCondition);
	}

	/**
	 * Return the 'itemOffered' Property value
	 *
	 * @return	string
	 */
	public static function pItemOffered()
	{
		return self::getValue(self::$itemOffered);
	}

	/**
	 * Return the 'mpn' Property value
	 *
	 * @return	string
	 */
	public static function pMpn()
	{
		return self::getValue(self::$mpn);
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

	/**
	 * Return the 'seller' Property value
	 *
	 * @return	string
	 */
	public static function pSeller()
	{
		return self::getValue(self::$seller);
	}

	/**
	 * Return the 'serialNumber' Property value
	 *
	 * @return	string
	 */
	public static function pSerialNumber()
	{
		return self::getValue(self::$serialNumber);
	}

	/**
	 * Return the 'sku' Property value
	 *
	 * @return	string
	 */
	public static function pSku()
	{
		return self::getValue(self::$sku);
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
	 * Return the 'warranty' Property value
	 *
	 * @return	string
	 */
	public static function pWarranty()
	{
		return self::getValue(self::$warranty);
	}
}
