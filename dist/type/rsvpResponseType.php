<?php
/**
 * RsvpResponseType is an enumeration type whose instances represent responding to an RSVP request.
 *
 * @see    http://schema.org/RsvpResponseType
*/
abstract class TypeRsvpResponseType extends TypeEnumeration
{
	/**
	 * The Schema.org Type Scope
	 *
	 * @var string
	 */
	protected static $scope = 'https://schema.org/RsvpResponseType';
}
