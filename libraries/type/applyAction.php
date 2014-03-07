<?php
/**
 * The act of registering to an organization/service without the guarantee to receive it. NOTE(goto): should this be under InteractAction instead?Related actions:RegisterAction: Unlike RegisterAction, ApplyAction has no guarantees that the application will be accepted.
 *
 * @see    http://schema.org/ApplyAction
*/
abstract class TypeApplyAction extends TypeOrganizeAction
{
	/**
	 * The Schema.org Type Scope
	 *
	 * @var string
	 */
	protected static $scope = 'https://schema.org/ApplyAction';
}
