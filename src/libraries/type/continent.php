<?php
/**
 * One of the continents (for example, Europe or Africa).
 *
 * @see    http://schema.org/Continent
*/
abstract class TypeContinent extends TypeLandform
{
	/**
	 * The Schema.org Type Scope
	 *
	 * @var string
	 */
	protected static $scope = 'https://schema.org/Continent';
}
