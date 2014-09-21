<?php
/**
 * An over the air or online broadcast event.
 *
 * @see    http://schema.org/BroadcastEvent
*/
abstract class TypeBroadcastEvent extends TypePublicationEvent
{
	/**
	 * The Schema.org Type Scope
	 *
	 * @var string
	 */
	protected static $scope = 'https://schema.org/BroadcastEvent';
}
