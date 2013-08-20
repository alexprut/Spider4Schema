<?php
/**
 * A product is anything that is made available for sale—for example, a pair of shoes, a concert ticket, or a car. Commodity services, like haircuts, can also be represented using this type.
 *
 * @see    http://schema.org/Product
 * @since  1.0
*/
abstract class TypeProduct extends TypeThing
{
	/**
	 * The Schema.org Type Scope
	 *
	 * @var string
	 */
	protected static $scope = 'https://schema.org/Product';

	/**
	 * The overall rating, based on a collection of reviews or ratings, of the item.
	 * Expected Type: AggregateRating
	 * 
	 * @var	array
	 */
	protected static $aggregateRating = array('value' => 'aggregateRating',
		'expectedTypes' => array('AggregateRating')
	);

	/**
	 * The intended audience of the item, i.e. the group for whom the item was created.
	 * Expected Type: Audience
	 * 
	 * @var	array
	 */
	protected static $audience = array('value' => 'audience',
		'expectedTypes' => array('Audience')
	);

	/**
	 * The brand(s) associated with a product or service, or the brand(s) maintained by an organization or business person.
	 * Expected Type: Brand, Organization
	 * 
	 * @var	array
	 */
	protected static $brand = array('value' => 'brand',
		'expectedTypes' => array('Brand', 'Organization')
	);

	/**
	 * The color of the product.
	 * Expected Type: Text
	 * 
	 * @var	array
	 */
	protected static $color = array('value' => 'color',
		'expectedTypes' => array('Text')
	);

	/**
	 * The depth of the product.
	 * Expected Type: Distance, QuantitativeValue
	 * 
	 * @var	array
	 */
	protected static $depth = array('value' => 'depth',
		'expectedTypes' => array('Distance', 'QuantitativeValue')
	);

	/**
	 * The GTIN-13 code of the product, or the product to which the offer refers. This is equivalent to 13-digit ISBN codes and EAN UCC-13. Former 12-digit UPC codes can be converted into a GTIN-13 code by simply adding a preceeding zero.
	 * Expected Type: Text
	 * 
	 * @var	array
	 */
	protected static $gtin13 = array('value' => 'gtin13',
		'expectedTypes' => array('Text')
	);

	/**
	 * The GTIN-14 code of the product, or the product to which the offer refers.
	 * Expected Type: Text
	 * 
	 * @var	array
	 */
	protected static $gtin14 = array('value' => 'gtin14',
		'expectedTypes' => array('Text')
	);

	/**
	 * The GTIN-8 code of the product, or the product to which the offer refers. This code is also known as EAN/UCC-8 or 8-digit EAN.
	 * Expected Type: Text
	 * 
	 * @var	array
	 */
	protected static $gtin8 = array('value' => 'gtin8',
		'expectedTypes' => array('Text')
	);

	/**
	 * The height of the item.
	 * Expected Type: Distance, QuantitativeValue
	 * 
	 * @var	array
	 */
	protected static $height = array('value' => 'height',
		'expectedTypes' => array('Distance', 'QuantitativeValue')
	);

	/**
	 * A pointer to another product (or multiple products) for which this product is an accessory or spare part.
	 * Expected Type: Product
	 * 
	 * @var	array
	 */
	protected static $isAccessoryOrSparePartFor = array('value' => 'isAccessoryOrSparePartFor',
		'expectedTypes' => array('Product')
	);

	/**
	 * A pointer to another product (or multiple products) for which this product is a consumable.
	 * Expected Type: Product
	 * 
	 * @var	array
	 */
	protected static $isConsumableFor = array('value' => 'isConsumableFor',
		'expectedTypes' => array('Product')
	);

	/**
	 * A pointer to another, somehow related product (or multiple products).
	 * Expected Type: Product
	 * 
	 * @var	array
	 */
	protected static $isRelatedTo = array('value' => 'isRelatedTo',
		'expectedTypes' => array('Product')
	);

	/**
	 * A pointer to another, functionally similar product (or multiple products).
	 * Expected Type: Product
	 * 
	 * @var	array
	 */
	protected static $isSimilarTo = array('value' => 'isSimilarTo',
		'expectedTypes' => array('Product')
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
	 * URL of an image for the logo of the item.
	 * Expected Type: ImageObject, URL
	 * 
	 * @var	array
	 */
	protected static $logo = array('value' => 'logo',
		'expectedTypes' => array('ImageObject', 'URL')
	);

	/**
	 * The manufacturer of the product.
	 * Expected Type: Organization
	 * 
	 * @var	array
	 */
	protected static $manufacturer = array('value' => 'manufacturer',
		'expectedTypes' => array('Organization')
	);

	/**
	 * The model of the product. Use with the URL of a ProductModel or a textual representation of the model identifier. The URL of the ProductModel can be from an external source. It is recommended to additionally provide strong product identifiers via the gtin8/gtin13/gtin14 and mpn properties.
	 * Expected Type: ProductModel, Text
	 * 
	 * @var	array
	 */
	protected static $model = array('value' => 'model',
		'expectedTypes' => array('ProductModel', 'Text')
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
	 * An offer to sell this item—for example, an offer to sell a product, the DVD of a movie, or tickets to an event.
	 * Expected Type: Offer
	 * 
	 * @var	array
	 */
	protected static $offers = array('value' => 'offers',
		'expectedTypes' => array('Offer')
	);

	/**
	 * The product identifier, such as ISBN. For example: <meta itemprop='productID' content='isbn:123-456-789'/>.
	 * Expected Type: Text
	 * 
	 * @var	array
	 */
	protected static $productID = array('value' => 'productID',
		'expectedTypes' => array('Text')
	);

	/**
	 * The release date of a product or product model. This can be used to distinguish the exact variant of a product.
	 * Expected Type: Date
	 * 
	 * @var	array
	 */
	protected static $releaseDate = array('value' => 'releaseDate',
		'expectedTypes' => array('Date')
	);

	/**
	 * A review of the item.
	 * Expected Type: Review
	 * 
	 * @var	array
	 */
	protected static $review = array('value' => 'review',
		'expectedTypes' => array('Review')
	);

	/**
	 * Review of the item (legacy spelling; see singular form, review).
	 * Expected Type: Review
	 * 
	 * @var	array
	 */
	protected static $reviews = array('value' => 'reviews',
		'expectedTypes' => array('Review')
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
	 * The weight of the product.
	 * Expected Type: QuantitativeValue
	 * 
	 * @var	array
	 */
	protected static $weight = array('value' => 'weight',
		'expectedTypes' => array('QuantitativeValue')
	);

	/**
	 * The width of the item.
	 * Expected Type: Distance, QuantitativeValue
	 * 
	 * @var	array
	 */
	protected static $width = array('value' => 'width',
		'expectedTypes' => array('Distance', 'QuantitativeValue')
	);

	/**
	 * Return the 'aggregateRating' Property value
	 *
	 * @return	string
	 */
	public static function pAggregateRating()
	{
		return self::getValue(self::$aggregateRating);
	}

	/**
	 * Return the 'audience' Property value
	 *
	 * @return	string
	 */
	public static function pAudience()
	{
		return self::getValue(self::$audience);
	}

	/**
	 * Return the 'brand' Property value
	 *
	 * @return	string
	 */
	public static function pBrand()
	{
		return self::getValue(self::$brand);
	}

	/**
	 * Return the 'color' Property value
	 *
	 * @return	string
	 */
	public static function pColor()
	{
		return self::getValue(self::$color);
	}

	/**
	 * Return the 'depth' Property value
	 *
	 * @return	string
	 */
	public static function pDepth()
	{
		return self::getValue(self::$depth);
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
	 * Return the 'height' Property value
	 *
	 * @return	string
	 */
	public static function pHeight()
	{
		return self::getValue(self::$height);
	}

	/**
	 * Return the 'isAccessoryOrSparePartFor' Property value
	 *
	 * @return	string
	 */
	public static function pIsAccessoryOrSparePartFor()
	{
		return self::getValue(self::$isAccessoryOrSparePartFor);
	}

	/**
	 * Return the 'isConsumableFor' Property value
	 *
	 * @return	string
	 */
	public static function pIsConsumableFor()
	{
		return self::getValue(self::$isConsumableFor);
	}

	/**
	 * Return the 'isRelatedTo' Property value
	 *
	 * @return	string
	 */
	public static function pIsRelatedTo()
	{
		return self::getValue(self::$isRelatedTo);
	}

	/**
	 * Return the 'isSimilarTo' Property value
	 *
	 * @return	string
	 */
	public static function pIsSimilarTo()
	{
		return self::getValue(self::$isSimilarTo);
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
	 * Return the 'logo' Property value
	 *
	 * @return	string
	 */
	public static function pLogo()
	{
		return self::getValue(self::$logo);
	}

	/**
	 * Return the 'manufacturer' Property value
	 *
	 * @return	string
	 */
	public static function pManufacturer()
	{
		return self::getValue(self::$manufacturer);
	}

	/**
	 * Return the 'model' Property value
	 *
	 * @return	string
	 */
	public static function pModel()
	{
		return self::getValue(self::$model);
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
	 * Return the 'offers' Property value
	 *
	 * @return	string
	 */
	public static function pOffers()
	{
		return self::getValue(self::$offers);
	}

	/**
	 * Return the 'productID' Property value
	 *
	 * @return	string
	 */
	public static function pProductID()
	{
		return self::getValue(self::$productID);
	}

	/**
	 * Return the 'releaseDate' Property value
	 *
	 * @return	string
	 */
	public static function pReleaseDate()
	{
		return self::getValue(self::$releaseDate);
	}

	/**
	 * Return the 'review' Property value
	 *
	 * @return	string
	 */
	public static function pReview()
	{
		return self::getValue(self::$review);
	}

	/**
	 * Return the 'reviews' Property value
	 *
	 * @return	string
	 */
	public static function pReviews()
	{
		return self::getValue(self::$reviews);
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
	 * Return the 'weight' Property value
	 *
	 * @return	string
	 */
	public static function pWeight()
	{
		return self::getValue(self::$weight);
	}

	/**
	 * Return the 'width' Property value
	 *
	 * @return	string
	 */
	public static function pWidth()
	{
		return self::getValue(self::$width);
	}
}
