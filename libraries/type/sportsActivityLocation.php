<?php
/**
 * A sports location, such as a playing field.
 *
 * @see    http://schema.org/SportsActivityLocation
*/
abstract class TypeSportsActivityLocation extends TypeLocalBusiness
{
	/**
	 * The Schema.org Type Scope
	 *
	 * @var string
	 */
	protected static $scope = 'https://schema.org/SportsActivityLocation';
}
