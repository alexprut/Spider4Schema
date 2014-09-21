<?php
/**
 * A hotel.
 *
 * @see    http://schema.org/Hotel
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
