<?php
/**
 * @package     Joomla.Platform
 * @subpackage  Microdata
 *
 * @copyright   Copyright (C) 2005 - 2013 Open Source Matters, Inc. All rights reserved.
 * @license     GNU General Public License version 2 or later; see LICENSE
 */

defined("JPATH_PLATFORM") or die;

/**
 * Entities that have a somewhat fixed, physical extension.
 *
 * @package     Joomla.Platform
 * @subpackage  Microdata
 *
 * @see         http://schema.org/Place
 * @since       13.1
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
	 * Upcoming or past event associated with this place or organization.
	 * Expected Type: Event
	 * 
	 * @var	array
	 */
	protected static $event = array('value' => 'event',
		'expectedTypes' => array('Event')
	);

	/**
	 * Upcoming or past events associated with this place or organization (legacy spelling; see singular form, event).
	 * Expected Type: Event
	 * 
	 * @var	array
	 */
	protected static $events = array('value' => 'events',
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
	 * URL of an image for the logo of the item.
	 * Expected Type: ImageObject, URL
	 * 
	 * @var	array
	 */
	protected static $logo = array('value' => 'logo',
		'expectedTypes' => array('ImageObject', 'URL')
	);

	/**
	 * A URL to a map of the place.
	 * Expected Type: URL
	 * 
	 * @var	array
	 */
	protected static $map = array('value' => 'map',
		'expectedTypes' => array('URL')
	);

	/**
	 * A URL to a map of the place (legacy spelling; see singular form, map).
	 * Expected Type: URL
	 * 
	 * @var	array
	 */
	protected static $maps = array('value' => 'maps',
		'expectedTypes' => array('URL')
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
	 * A photograph of this place.
	 * Expected Type: ImageObject, Photograph
	 * 
	 * @var	array
	 */
	protected static $photo = array('value' => 'photo',
		'expectedTypes' => array('ImageObject', 'Photograph')
	);

	/**
	 * Photographs of this place (legacy spelling; see singular form, photo).
	 * Expected Type: ImageObject, Photograph
	 * 
	 * @var	array
	 */
	protected static $photos = array('value' => 'photos',
		'expectedTypes' => array('ImageObject', 'Photograph')
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
	 * Return the 'events' Property value
	 *
	 * @return	string
	 */
	public static function pEvents()
	{
		return self::getValue(self::$events);
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
	 * Return the 'map' Property value
	 *
	 * @return	string
	 */
	public static function pMap()
	{
		return self::getValue(self::$map);
	}

	/**
	 * Return the 'maps' Property value
	 *
	 * @return	string
	 */
	public static function pMaps()
	{
		return self::getValue(self::$maps);
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
	 * Return the 'photos' Property value
	 *
	 * @return	string
	 */
	public static function pPhotos()
	{
		return self::getValue(self::$photos);
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
	 * Return the 'telephone' Property value
	 *
	 * @return	string
	 */
	public static function pTelephone()
	{
		return self::getValue(self::$telephone);
	}
}
