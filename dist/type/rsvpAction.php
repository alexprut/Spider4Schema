<?php
/**
 * The act of notifying an event organizer as to whether you expect to attend the event.
 *
 * @see    http://schema.org/RsvpAction
*/
abstract class TypeRsvpAction extends TypeInformAction
{
	/**
	 * The Schema.org Type Scope
	 *
	 * @var string
	 */
	protected static $scope = 'https://schema.org/RsvpAction';

	/**
	 * If responding yes, the number of guests who will attend in addition to the invitee.
	 * Expected Type: Number
	 * 
	 * @var	array
	 */
	protected static $additionalNumberOfGuests = array('value' => 'additionalNumberOfGuests',
		'expectedTypes' => array('Number')
	);

	/**
	 * The response (yes, no, maybe) to the RSVP.
	 * Expected Type: RsvpResponseType
	 * 
	 * @var	array
	 */
	protected static $rsvpResponse = array('value' => 'rsvpResponse',
		'expectedTypes' => array('RsvpResponseType')
	);

	/**
	 * Return the 'additionalNumberOfGuests' Property value
	 *
	 * @return	string
	 */
	public static function pAdditionalNumberOfGuests()
	{
		return self::getValue(self::$additionalNumberOfGuests);
	}

	/**
	 * Return the 'rsvpResponse' Property value
	 *
	 * @return	string
	 */
	public static function pRsvpResponse()
	{
		return self::getValue(self::$rsvpResponse);
	}
}
