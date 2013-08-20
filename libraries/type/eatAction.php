<?php
/**
 * The act of swallowing solid objects.
 *
 * @see    http://schema.org/EatAction
 * @since  1.0
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
