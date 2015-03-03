<?php
/**
 * A list of possible product availability options.
 *
 * @see    http://schema.org/ItemAvailability
*/
abstract class TypeItemAvailability extends TypeEnumeration
{
	/**
	 * The Schema.org Type Scope
	 *
	 * @var string
	 */
	protected static $scope = 'https://schema.org/ItemAvailability';
}
