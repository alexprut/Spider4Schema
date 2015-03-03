<?php
/**
 * Event type: Social event.
 *
 * @see    http://schema.org/SocialEvent
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
