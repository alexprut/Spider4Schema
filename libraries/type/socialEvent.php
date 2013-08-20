<?php
/**
 * Event type: Social event.
 *
 * @see    http://schema.org/SocialEvent
 * @since  1.0
*/
abstract class TypeSocialEvent extends TypeEvent
{
	/**
	 * The Schema.org Type Scope
	 *
	 * @var string
	 */
	protected static $scope = 'https://schema.org/SocialEvent';
}
