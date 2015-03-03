<?php
/**
 * An agent leaves an event / group with participants/friends at a location.Related actions:JoinAction: The antagonym of LeaveAction.UnRegisterAction: Unlike UnRegisterAction, LeaveAction implies leaving a group/team of people rather than a service.
 *
 * @see    http://schema.org/LeaveAction
*/
abstract class TypeLeaveAction extends TypeInteractAction
{
	/**
	 * The Schema.org Type Scope
	 *
	 * @var string
	 */
	protected static $scope = 'https://schema.org/LeaveAction';

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
