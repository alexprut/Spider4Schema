<?php
/**
 * A movie theater.
 *
 * @see    http://schema.org/MovieTheater
*/
abstract class TypeMovieTheater extends TypeEntertainmentBusiness
{
	/**
	 * The Schema.org Type Scope
	 *
	 * @var string
	 */
	protected static $scope = 'https://schema.org/MovieTheater';
}
