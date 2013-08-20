<?php
/**
 * The act of asserting that a future event/action is no longer going to happen.Related actions:ConfirmAction: The antagonym of CancelAction.
 *
 * @see    http://schema.org/CancelAction
 * @since  1.0
*/
abstract class TypeCancelAction extends TypePlanAction
{
	/**
	 * The Schema.org Type Scope
	 *
	 * @var string
	 */
	protected static $scope = 'https://schema.org/CancelAction';
}
