<?php
/**
 * An airport.
 *
 * @see    http://schema.org/Airport
 * @since  1.0
*/
abstract class TypeAirport extends TypeCivicStructure
{
	/**
	 * The Schema.org Type Scope
	 *
	 * @var string
	 */
	protected static $scope = 'https://schema.org/Airport';
}
