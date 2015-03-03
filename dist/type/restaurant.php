<?php
/**
 * A restaurant.
 *
 * @see    http://schema.org/Restaurant
*/
abstract class TypeRestaurant extends TypeFoodEstablishment
{
	/**
	 * The Schema.org Type Scope
	 *
	 * @var string
	 */
	protected static $scope = 'https://schema.org/Restaurant';
}
