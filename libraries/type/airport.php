<?php
/**
 * An airport.
 *
 * @see    http://schema.org/Airport
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
