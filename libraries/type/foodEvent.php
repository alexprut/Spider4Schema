<?php
/**
 * Event type: Food event.
 *
 * @see    http://schema.org/FoodEvent
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
