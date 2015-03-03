<?php
/**
 * The act of allocating an action/event/task to some destination (someone or something).
 *
 * @see    http://schema.org/AssignAction
*/
abstract class TypeAssignAction extends TypeAllocateAction
{
	/**
	 * The Schema.org Type Scope
	 *
	 * @var string
	 */
	protected static $scope = 'https://schema.org/AssignAction';
}
