<?php
/**
 * A bakery.
 *
 * @see    http://schema.org/Bakery
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
