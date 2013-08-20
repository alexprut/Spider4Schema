<?php
/**
 * A lodging business, such as a motel, hotel, or inn.
 *
 * @see    http://schema.org/LodgingBusiness
 * @since  1.0
*/
abstract class TypeLodgingBusiness extends TypeLocalBusiness
{
	/**
	 * The Schema.org Type Scope
	 *
	 * @var string
	 */
	protected static $scope = 'https://schema.org/LodgingBusiness';
}
