<?php
/**
 * The act of un-registering from a service.Related actions:RegisterAction: Antagonym of UnRegisterAction.Leave: Unlike LeaveAction, UnRegisterAction implies that you are unregistering from a service you werer previously registered, rather than leaving a team/group of people.
 *
 * @see    http://schema.org/UnRegisterAction
*/
abstract class TypeUnRegisterAction extends TypeInteractAction
{
	/**
	 * The Schema.org Type Scope
	 *
	 * @var string
	 */
	protected static $scope = 'https://schema.org/UnRegisterAction';
}
