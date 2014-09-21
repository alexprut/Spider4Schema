<?php
/**
 * The act of notifying someone that a future event/action is going to happen as expected.Related actions:CancelAction: The antagonym of ConfirmAction.
 *
 * @see    http://schema.org/ConfirmAction
*/
abstract class TypeConfirmAction extends TypeInformAction
{
	/**
	 * The Schema.org Type Scope
	 *
	 * @var string
	 */
	protected static $scope = 'https://schema.org/ConfirmAction';
}
