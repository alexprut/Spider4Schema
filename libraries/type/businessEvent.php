<?php
/**
 * Event type: Business event.
 *
 * @see    http://schema.org/BusinessEvent
 * @since  1.0
*/
abstract class TypeBusinessEvent extends TypeEvent
{
	/**
	 * The Schema.org Type Scope
	 *
	 * @var string
	 */
	protected static $scope = 'https://schema.org/BusinessEvent';
}
