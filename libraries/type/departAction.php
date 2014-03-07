<?php
/**
 * The act of  departing from a place. An agent departs from an fromLocation for a destination, optionally with participants.
 *
 * @see    http://schema.org/DepartAction
*/
abstract class TypeDepartAction extends TypeMoveAction
{
	/**
	 * The Schema.org Type Scope
	 *
	 * @var string
	 */
	protected static $scope = 'https://schema.org/DepartAction';
}
