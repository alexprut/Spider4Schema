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
	 * A person or organization attending the event. Supersedes attendees.
	 * Expected Type: Person, Organization
	 * 
	 * @var	array
	 */
	protected static $attendee = array('value' => 'attendee',
		'expectedTypes' => array('Person', 'Organization')
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
	 * The end date and time of the item (in ISO 8601 date format).
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
	 * An offer to provide this item—for example, an offer to sell a product, rent the DVD of a movie, or give away tickets to an event.
	 * Expected Type: Offer
	 * 
	 * @var	array
	 */
	protected static $offers = array('value' => 'offers',
		'expectedTypes' => array('Offer')
	);

	/**
	 * An organizer of an Event.
	 * Expected Type: Person, Organization
	 * 
	 * @var	array
	 */
	protected static $organizer = array('value' => 'organizer',
		'expectedTypes' => array('Person', 'Organization')
	);

	/**
	 * A performer at the event—for example, a presenter, musician, musical group or actor. Supersedes performers.
	 * Expected Type: Person, Organization
	 * 
	 * @var	array
	 */
	protected static $performer = array('value' => 'performer',
		'expectedTypes' => array('Person', 'Organization')
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
	 * The CreativeWork that captured all or part of this Event. Inverse property: recordedAt.
	 * Expected Type: CreativeWork
	 * 
	 * @var	array
	 */
	protected static $recordedIn = array('value' => 'recordedIn',
		'expectedTypes' => array('CreativeWork')
	);

	/**
	 * The start date and time of the item (in ISO 8601 date format).
	 * Expected Type: Date
	 * 
	 * @var	array
	 */
	protected static $startDate = array('value' => 'startDate',
		'expectedTypes' => array('Date')
	);

	/**
	 * An Event that is part of this event. For example, a conference event includes many presentations, each of which is a subEvent of the conference. Supersedes subEvents.
	 * Expected Type: Event
	 * 
	 * @var	array
	 */
	protected static $subEvent = array('value' => 'subEvent',
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
	 * A work performed in some event, for example a play performed in a TheaterEvent.
	 * Expected Type: CreativeWork
	 * 
	 * @var	array
	 */
	protected static $workPerformed = array('value' => 'workPerformed',
		'expectedTypes' => array('CreativeWork')
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
	 * Return the 'organizer' Property value
	 *
	 * @return	string
	 */
	public static function pOrganizer()
	{
		return self::getValue(self::$organizer);
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
	 * Return the 'previousStartDate' Property value
	 *
	 * @return	string
	 */
	public static function pPreviousStartDate()
	{
		return self::getValue(self::$previousStartDate);
	}

	/**
	 * Return the 'recordedIn' Property value
	 *
	 * @return	string
	 */
	public static function pRecordedIn()
	{
		return self::getValue(self::$recordedIn);
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

	/**
	 * Return the 'workPerformed' Property value
	 *
	 * @return	string
	 */
	public static function pWorkPerformed()
	{
		return self::getValue(self::$workPerformed);
	}
}
