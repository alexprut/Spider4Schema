<?php
/**
 * Event type: Theater performance.
 *
 * @see    http://schema.org/TheaterEvent
 * @since  1.0
*/
abstract class TypeTheaterEvent extends TypeEvent
{
	/**
	 * The Schema.org Type Scope
	 *
	 * @var string
	 */
	protected static $scope = 'https://schema.org/TheaterEvent';
}
