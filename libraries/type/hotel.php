<?php
/**
 * A hotel.
 *
 * @see    http://schema.org/Hotel
 * @since  1.0
*/
abstract class TypeHotel extends TypeLodgingBusiness
{
	/**
	 * The Schema.org Type Scope
	 *
	 * @var string
	 */
	protected static $scope = 'https://schema.org/Hotel';
}
