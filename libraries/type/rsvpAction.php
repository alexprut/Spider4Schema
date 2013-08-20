<?php
/**
 * The act of notifying an event organiser as to whether you expect to attend the event.
 *
 * @see    http://schema.org/RsvpAction
 * @since  1.0
*/
abstract class TypeRsvpAction extends TypeInformAction
{
	/**
	 * The Schema.org Type Scope
	 *
	 * @var string
	 */
	protected static $scope = 'https://schema.org/RsvpAction';
}
