<?php
/**
 * An agent inspects/determines/investigates/inquire or examine an object's accuracy/quality/condition or state.
 *
 * @see    http://schema.org/CheckAction
*/
abstract class TypeCheckAction extends TypeFindAction
{
	/**
	 * The Schema.org Type Scope
	 *
	 * @var string
	 */
	protected static $scope = 'https://schema.org/CheckAction';
}
