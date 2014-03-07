<?php
/**
 * Event type: Children's event.
 *
 * @see    http://schema.org/ChildrensEvent
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
