<?php
/**
 * EventStatusType is an enumeration type whose instances represent several states that an Event may be in.
 *
 * @see    http://schema.org/EventStatusType
*/
abstract class TypeEventStatusType extends TypeEnumeration
{
	/**
	 * The Schema.org Type Scope
	 *
	 * @var string
	 */
	protected static $scope = 'https://schema.org/EventStatusType';
}
