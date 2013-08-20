<?php
/**
 * Event type: Children's event.
 *
 * @see    http://schema.org/ChildrensEvent
 * @since  1.0
*/
abstract class TypeChildrensEvent extends TypeEvent
{
	/**
	 * The Schema.org Type Scope
	 *
	 * @var string
	 */
	protected static $scope = 'https://schema.org/ChildrensEvent';
}
