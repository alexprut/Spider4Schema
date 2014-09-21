<?php
/**
 * An agent joins an event/group with participants/friends at a location.Related actions:RegisterAction: Unlike RegisterAction, JoinAction refers to joining a group/team of people.SubscribeAction: Unlike SubscribeAction, JoinAction does not imply that you'll be receiving updates.FollowAction: Unlike FollowAction, JoinAction does not imply that you'll be polling for updates.
 *
 * @see    http://schema.org/JoinAction
*/
abstract class TypeJoinAction extends TypeInteractAction
{
	/**
	 * The Schema.org Type Scope
	 *
	 * @var string
	 */
	protected static $scope = 'https://schema.org/JoinAction';

	/**
	 * Upcoming or past event associated with this place or organization. Supercedes events.
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
