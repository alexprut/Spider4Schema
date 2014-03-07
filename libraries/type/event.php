<?php
/**
 * An event happening at a certain time and location, such as a concert, lecture, or festival. Ticketing information may be added via the 'offers' property. Repeated events may be structured as separate Event objects.
 *
 * @see    http://schema.org/Event
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
	 * The time admission will commence.
	 * Expected Type: DateTime
	 * 
	 * @var	array
	 */
	protected static $doorTime = array('value' => 'doorTime',
		'expectedTypes' => array('DateTime')
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
	 * The end date and time of the event or item (in ISO 8601 date format).
	 * Expected Type: Date
	 * 
	 * @var	array
	 */
	protected static $endDate = array('value' => 'endDate',
		'expectedTypes' => array('Date')
	);

	/**
	 * An eventStatus of an event represents its status; particularly useful when an event is cancelled or rescheduled.
	 * Expected Type: EventStatusType
	 * 
	 * @var	array
	 */
	protected static $eventStatus = array('value' => 'eventStatus',
		'expectedTypes' => array('EventStatusType')
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
	 * An offer to transfer some rights to an item or to provide a service—for example, an offer to sell tickets to an event, to rent the DVD of a movie, to stream a TV show over the internet, to repair a motorcycle, or to loan a book.
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
	 * Used in conjunction with eventStatus for rescheduled or cancelled events. This property contains the previously scheduled start date. For rescheduled events, the startDate property should be used for the newly scheduled start date. In the (rare) case of an event that has been postponed and rescheduled multiple times, this field may be repeated.
	 * Expected Type: Date
	 * 
	 * @var	array
	 */
	protected static $previousStartDate = array('value' => 'previousStartDate',
		'expectedTypes' => array('Date')
	);

	/**
	 * The start date and time of the event or item (in ISO 8601 date format).
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
	 * The typical expected age range, e.g. '7-9', '11-'.
	 * Expected Type: Text
	 * 
	 * @var	array
	 */
	protected static $typicalAgeRange = array('value' => 'typicalAgeRange',
		'expectedTypes' => array('Text')
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
	 * Return the 'doorTime' Property value
	 *
	 * @return	string
	 */
	public static function pDoorTime()
	{
		return self::getValue(self::$doorTime);
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
	 * Return the 'eventStatus' Property value
	 *
	 * @return	string
	 */
	public static function pEventStatus()
	{
		return self::getValue(self::$eventStatus);
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
	 * Return the 'previousStartDate' Property value
	 *
	 * @return	string
	 */
	public static function pPreviousStartDate()
	{
		return self::getValue(self::$previousStartDate);
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

	/**
	 * Return the 'typicalAgeRange' Property value
	 *
	 * @return	string
	 */
	public static function pTypicalAgeRange()
	{
		return self::getValue(self::$typicalAgeRange);
	}
}
