<?php
/**
 * The act of gaining ownership of an object from an origin. Reciprocal of GiveAction.Related actions:GiveAction: The reciprocal of TakeAction.ReceiveAction: Unlike ReceiveAction, TakeAction implies that ownership has been transfered.
 *
 * @see    http://schema.org/TakeAction
*/
abstract class TypeTakeAction extends TypeTransferAction
{
	/**
	 * The Schema.org Type Scope
	 *
	 * @var string
	 */
	protected static $scope = 'https://schema.org/TakeAction';
}
