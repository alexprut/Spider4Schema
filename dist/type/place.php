<?php
/**
 * Entities that have a somewhat fixed, physical extension.
 *
 * @see    http://schema.org/Place
*/
abstract class TypePlace extends TypeThing
{
	/**
	 * The Schema.org Type Scope
	 *
	 * @var string
	 */
	protected static $scope = 'https://schema.org/Place';

	/**
	 * Physical address of the item.
	 * Expected Type: PostalAddress
	 * 
	 * @var	array
	 */
	protected static $address = array('value' => 'address',
		'expectedTypes' => array('PostalAddress')
	);

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
	 * The basic containment relation between places.
	 * Expected Type: Place
	 * 
	 * @var	array
	 */
	protected static $containedIn = array('value' => 'containedIn',
		'expectedTypes' => array('Place')
	);

	/**
	 * Upcoming or past event associated with this place, organization, or action. Supersedes events.
	 * Expected Type: Event
	 * 
	 * @var	array
	 */
	protected static $event = array('value' => 'event',
		'expectedTypes' => array('Event')
	);

	/**
	 * The fax number.
	 * Expected Type: Text
	 * 
	 * @var	array
	 */
	protected static $faxNumber = array('value' => 'faxNumber',
		'expectedTypes' => array('Text')
	);

	/**
	 * The geo coordinates of the place.
	 * Expected Type: GeoCoordinates, GeoShape
	 * 
	 * @var	array
	 */
	protected static $geo = array('value' => 'geo',
		'expectedTypes' => array('GeoCoordinates', 'GeoShape')
	);

	/**
	 * The Global Location Number (GLN, sometimes also referred to as International Location Number or ILN) of the respective organization, person, or place. The GLN is a 13-digit number used to identify parties and physical locations.
	 * Expected Type: Text
	 * 
	 * @var	array
	 */
	protected static $globalLocationNumber = array('value' => 'globalLocationNumber',
		'expectedTypes' => array('Text')
	);

	/**
	 * A URL to a map of the place. Supersedes map, maps.
	 * Expected Type: Map, URL
	 * 
	 * @var	array
	 */
	protected static $hasMap = array('value' => 'hasMap',
		'expectedTypes' => array('Map', 'URL')
	);

	/**
	 * A count of a specific user interactions with this item—for example, 20 UserLikes, 5 UserComments, or 300 UserDownloads. The user interaction type should be one of the sub types of UserInteraction.
	 * Expected Type: Text
	 * 
	 * @var	array
	 */
	protected static $interactionCount = array('value' => 'interactionCount',
		'expectedTypes' => array('Text')
	);

	/**
	 * The International Standard of Industrial Classification of All Economic Activities (ISIC), Revision 4 code for a particular organization, business person, or place.
	 * Expected Type: Text
	 * 
	 * @var	array
	 */
	protected static $isicV4 = array('value' => 'isicV4',
		'expectedTypes' => array('Text')
	);

	/**
	 * An associated logo.
	 * Expected Type: ImageObject, URL
	 * 
	 * @var	array
	 */
	protected static $logo = array('value' => 'logo',
		'expectedTypes' => array('ImageObject', 'URL')
	);

	/**
	 * The opening hours of a certain place.
	 * Expected Type: OpeningHoursSpecification
	 * 
	 * @var	array
	 */
	protected static $openingHoursSpecification = array('value' => 'openingHoursSpecification',
		'expectedTypes' => array('OpeningHoursSpecification')
	);

	/**
	 * A photograph of this place. Supersedes photos.
	 * Expected Type: ImageObject, Photograph
	 * 
	 * @var	array
	 */
	protected static $photo = array('value' => 'photo',
		'expectedTypes' => array('ImageObject', 'Photograph')
	);

	/**
	 * A review of the item. Supersedes reviews.
	 * Expected Type: Review
	 * 
	 * @var	array
	 */
	protected static $review = array('value' => 'review',
		'expectedTypes' => array('Review')
	);

	/**
	 * The telephone number.
	 * Expected Type: Text
	 * 
	 * @var	array
	 */
	protected static $telephone = array('value' => 'telephone',
		'expectedTypes' => array('Text')
	);

	/**
	 * Return the 'address' Property value
	 *
	 * @return	string
	 */
	public static function pAddress()
	{
		return self::getValue(self::$address);
	}

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
	 * Return the 'containedIn' Property value
	 *
	 * @return	string
	 */
	public static function pContainedIn()
	{
		return self::getValue(self::$containedIn);
	}

	/**
	 * Return the 'event' Property value
	 *
	 * @return	string
	 */
	public static function pEvent()
	{
		return self::getValue(self::$event);
	}

	/**
	 * Return the 'faxNumber' Property value
	 *
	 * @return	string
	 */
	public static function pFaxNumber()
	{
		return self::getValue(self::$faxNumber);
	}

	/**
	 * Return the 'geo' Property value
	 *
	 * @return	string
	 */
	public static function pGeo()
	{
		return self::getValue(self::$geo);
	}

	/**
	 * Return the 'globalLocationNumber' Property value
	 *
	 * @return	string
	 */
	public static function pGlobalLocationNumber()
	{
		return self::getValue(self::$globalLocationNumber);
	}

	/**
	 * Return the 'hasMap' Property value
	 *
	 * @return	string
	 */
	public static function pHasMap()
	{
		return self::getValue(self::$hasMap);
	}

	/**
	 * Return the 'interactionCount' Property value
	 *
	 * @return	string
	 */
	public static function pInteractionCount()
	{
		return self::getValue(self::$interactionCount);
	}

	/**
	 * Return the 'isicV4' Property value
	 *
	 * @return	string
	 */
	public static function pIsicV4()
	{
		return self::getValue(self::$isicV4);
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
	 * Return the 'openingHoursSpecification' Property value
	 *
	 * @return	string
	 */
	public static function pOpeningHoursSpecification()
	{
		return self::getValue(self::$openingHoursSpecification);
	}

	/**
	 * Return the 'photo' Property value
	 *
	 * @return	string
	 */
	public static function pPhoto()
	{
		return self::getValue(self::$photo);
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
	 * Return the 'telephone' Property value
	 *
	 * @return	string
	 */
	public static function pTelephone()
	{
		return self::getValue(self::$telephone);
	}
}
