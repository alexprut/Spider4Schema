<?php
/**
 * A bakery.
 *
 * @see    http://schema.org/Bakery
 * @since  1.0
*/
abstract class TypeBakery extends TypeFoodEstablishment
{
	/**
	 * The Schema.org Type Scope
	 *
	 * @var string
	 */
	protected static $scope = 'https://schema.org/Bakery';
}
