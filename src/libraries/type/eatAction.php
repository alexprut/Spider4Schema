<?php
/**
 * The act of swallowing solid objects.
 *
 * @see    http://schema.org/EatAction
*/
abstract class TypeEatAction extends TypeConsumeAction
{
	/**
	 * The Schema.org Type Scope
	 *
	 * @var string
	 */
	protected static $scope = 'https://schema.org/EatAction';
}
