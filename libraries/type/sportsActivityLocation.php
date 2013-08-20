<?php
/**
 * A sports location, such as a playing field.
 *
 * @see    http://schema.org/SportsActivityLocation
 * @since  1.0
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
