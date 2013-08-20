<?php
/**
 * Event type: A social dance.
 *
 * @see    http://schema.org/DanceEvent
 * @since  1.0
*/
abstract class TypeDanceEvent extends TypeEvent
{
	/**
	 * The Schema.org Type Scope
	 *
	 * @var string
	 */
	protected static $scope = 'https://schema.org/DanceEvent';
}
