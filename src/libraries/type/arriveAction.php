<?php
/**
 * The act of arriving at a place. An agent arrives at a destination from an fromLocation, optionally with participants.
 *
 * @see    http://schema.org/ArriveAction
*/
abstract class TypeArriveAction extends TypeMoveAction
{
	/**
	 * The Schema.org Type Scope
	 *
	 * @var string
	 */
	protected static $scope = 'https://schema.org/ArriveAction';
}
