<?php
/**
 * An event happening at a certain time at a certain location.
 *
 * @see    http://schema.org/Event
 * @since  1.0
*/
abstract class TypeEvent extends TypeThing
{
	/**
	 * The Schema.org Type Scope
	 *
	 * @var string
	 */
	protected static $scope = 'https://schema.org/Event';

	/**
	 * A person or organization attending the event.
	 * Expected Type: Organization, Person
	 * 
	 * @var	array
	 */
	protected static $attendee = array('value' => 'attendee',
		'expectedTypes' => array('Organization', 'Person')
	);

	/**
	 * A person attending the event (legacy spelling; see singular form, attendee).
	 * Expected Type: Organization, Person
	 * 
	 * @var	array
	 */
	protected static $attendees = array('value' => 'attendees',
		'expectedTypes' => array('Organization', 'Person')
	);

	/**
	 * The duration of the item (movie, audio recording, event, etc.) in ISO 8601 date format.
	 * Expected Type: Duration
	 * 
	 * @var	array
	 */
	protected static $duration = array('value' => 'duration',
		'expectedTypes' => array('Duration')
	);

	/**
	 * The end date and time of the event (in ISO 8601 date format).
	 * Expected Type: Date
	 * 
	 * @var	array
	 */
	protected static $endDate = array('value' => 'endDate',
		'expectedTypes' => array('Date')
	);

	/**
	 * The location of the event, organization or action.
	 * Expected Type: Place, PostalAddress
	 * 
	 * @var	array
	 */
	protected static $location = array('value' => 'location',
		'expectedTypes' => array('Place', 'PostalAddress')
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
	 * A performer at the event—for example, a presenter, musician, musical group or actor.
	 * Expected Type: Organization, Person
	 * 
	 * @var	array
	 */
	protected static $performer = array('value' => 'performer',
		'expectedTypes' => array('Organization', 'Person')
	);

	/**
	 * The main performer or performers of the event—for example, a presenter, musician, or actor (legacy spelling; see singular form, performer).
	 * Expected Type: Organization, Person
	 * 
	 * @var	array
	 */
	protected static $performers = array('value' => 'performers',
		'expectedTypes' => array('Organization', 'Person')
	);

	/**
	 * The start date and time of the event (in ISO 8601 date format).
	 * Expected Type: Date
	 * 
	 * @var	array
	 */
	protected static $startDate = array('value' => 'startDate',
		'expectedTypes' => array('Date')
	);

	/**
	 * An Event that is part of this event. For example, a conference event includes many presentations, each are a subEvent of the conference.
	 * Expected Type: Event
	 * 
	 * @var	array
	 */
	protected static $subEvent = array('value' => 'subEvent',
		'expectedTypes' => array('Event')
	);

	/**
	 * Events that are a part of this event. For example, a conference event includes many presentations, each are subEvents of the conference (legacy spelling; see singular form, subEvent).
	 * Expected Type: Event
	 * 
	 * @var	array
	 */
	protected static $subEvents = array('value' => 'subEvents',
		'expectedTypes' => array('Event')
	);

	/**
	 * An event that this event is a part of. For example, a collection of individual music performances might each have a music festival as their superEvent.
	 * Expected Type: Event
	 * 
	 * @var	array
	 */
	protected static $superEvent = array('value' => 'superEvent',
		'expectedTypes' => array('Event')
	);

	/**
	 * Return the 'attendee' Property value
	 *
	 * @return	string
	 */
	public static function pAttendee()
	{
		return self::getValue(self::$attendee);
	}

	/**
	 * Return the 'attendees' Property value
	 *
	 * @return	string
	 */
	public static function pAttendees()
	{
		return self::getValue(self::$attendees);
	}

	/**
	 * Return the 'duration' Property value
	 *
	 * @return	string
	 */
	public static function pDuration()
	{
		return self::getValue(self::$duration);
	}

	/**
	 * Return the 'endDate' Property value
	 *
	 * @return	string
	 */
	public static function pEndDate()
	{
		return self::getValue(self::$endDate);
	}

	/**
	 * Return the 'location' Property value
	 *
	 * @return	string
	 */
	public static function pLocation()
	{
		return self::getValue(self::$location);
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
	 * Return the 'performer' Property value
	 *
	 * @return	string
	 */
	public static function pPerformer()
	{
		return self::getValue(self::$performer);
	}

	/**
	 * Return the 'performers' Property value
	 *
	 * @return	string
	 */
	public static function pPerformers()
	{
		return self::getValue(self::$performers);
	}

	/**
	 * Return the 'startDate' Property value
	 *
	 * @return	string
	 */
	public static function pStartDate()
	{
		return self::getValue(self::$startDate);
	}

	/**
	 * Return the 'subEvent' Property value
	 *
	 * @return	string
	 */
	public static function pSubEvent()
	{
		return self::getValue(self::$subEvent);
	}

	/**
	 * Return the 'subEvents' Property value
	 *
	 * @return	string
	 */
	public static function pSubEvents()
	{
		return self::getValue(self::$subEvents);
	}

	/**
	 * Return the 'superEvent' Property value
	 *
	 * @return	string
	 */
	public static function pSuperEvent()
	{
		return self::getValue(self::$superEvent);
	}
}
