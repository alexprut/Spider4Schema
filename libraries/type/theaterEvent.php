<?php
/**
 * Event type: Theater performance.
 *
 * @see    http://schema.org/TheaterEvent
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
