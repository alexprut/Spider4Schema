<?php
/**
 * A user interacting with a page.
 *
 * @see    http://schema.org/UserInteraction
*/
abstract class TypeUserInteraction extends TypeEvent
{
	/**
	 * The Schema.org Type Scope
	 *
	 * @var string
	 */
	protected static $scope = 'https://schema.org/UserInteraction';
}
