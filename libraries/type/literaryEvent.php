<?php
/**
 * Event type: Literary event.
 *
 * @see    http://schema.org/LiteraryEvent
 * @since  1.0
*/
abstract class TypeLiteraryEvent extends TypeEvent
{
	/**
	 * The Schema.org Type Scope
	 *
	 * @var string
	 */
	protected static $scope = 'https://schema.org/LiteraryEvent';
}
