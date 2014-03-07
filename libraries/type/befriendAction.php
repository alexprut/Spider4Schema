<?php
/**
 * The act of forming a personal connection with someone (object) mutually/bidirectionally/symmetrically.Related actions:FollowAction: Unlike FollowAction, BefriendAction implies that the connection is reciprocal.
 *
 * @see    http://schema.org/BefriendAction
*/
abstract class TypeBefriendAction extends TypeInteractAction
{
	/**
	 * The Schema.org Type Scope
	 *
	 * @var string
	 */
	protected static $scope = 'https://schema.org/BefriendAction';
}
