<?php
/**
 * Event type: Sports event.
 *
 * @see    http://schema.org/SportsEvent
 * @since  1.0
*/
abstract class TypeSportsEvent extends TypeEvent
{
	/**
	 * The Schema.org Type Scope
	 *
	 * @var string
	 */
	protected static $scope = 'https://schema.org/SportsEvent';
}
