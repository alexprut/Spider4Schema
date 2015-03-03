<?php
/**
 * The act of asking someone to attend an event. Reciprocal of RsvpAction.
 *
 * @see    http://schema.org/InviteAction
*/
abstract class TypeInviteAction extends TypeCommunicateAction
{
	/**
	 * The Schema.org Type Scope
	 *
	 * @var string
	 */
	protected static $scope = 'https://schema.org/InviteAction';

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
	 * Return the 'event' Property value
	 *
	 * @return	string
	 */
	public static function pEvent()
	{
		return self::getValue(self::$event);
	}
}
