<?php
/**
 * Event type: Comedy event.
 *
 * @see    http://schema.org/ComedyEvent
 * @since  1.0
*/
abstract class TypeComedyEvent extends TypeEvent
{
	/**
	 * The Schema.org Type Scope
	 *
	 * @var string
	 */
	protected static $scope = 'https://schema.org/ComedyEvent';
}
