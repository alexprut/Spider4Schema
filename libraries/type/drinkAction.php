<?php
/**
 * The act of swallowing liquids.
 *
 * @see    http://schema.org/DrinkAction
 * @since  1.0
*/
abstract class TypeDrinkAction extends TypeConsumeAction
{
	/**
	 * The Schema.org Type Scope
	 *
	 * @var string
	 */
	protected static $scope = 'https://schema.org/DrinkAction';
}
