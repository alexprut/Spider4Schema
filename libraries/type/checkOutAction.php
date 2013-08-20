<?php
/**
 * The act of an agent communicating (service provider, social media, etc) their departure of a previously reserved service (e.g. flight check in) or place (e.g. hotel).Related actions:CheckInAction: The antagonym of CheckOutAction.DepartAction: Unlike DepartAction, CheckOutAction implies that the agent is informing/confirming the end of a previously reserved service.CancelAction: Unlike CancelAction, CheckOutAction implies that the agent is informing/confirming the end of a previously reserved service.
 *
 * @see    http://schema.org/CheckOutAction
 * @since  1.0
*/
abstract class TypeCheckOutAction extends TypeCommunicateAction
{
	/**
	 * The Schema.org Type Scope
	 *
	 * @var string
	 */
	protected static $scope = 'https://schema.org/CheckOutAction';
}
