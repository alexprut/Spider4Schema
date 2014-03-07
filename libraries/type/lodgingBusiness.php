<?php
/**
 * A lodging business, such as a motel, hotel, or inn.
 *
 * @see    http://schema.org/LodgingBusiness
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
