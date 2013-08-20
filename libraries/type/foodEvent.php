<?php
/**
 * Event type: Food event.
 *
 * @see    http://schema.org/FoodEvent
 * @since  1.0
*/
abstract class TypeFoodEvent extends TypeEvent
{
	/**
	 * The Schema.org Type Scope
	 *
	 * @var string
	 */
	protected static $scope = 'https://schema.org/FoodEvent';
}
