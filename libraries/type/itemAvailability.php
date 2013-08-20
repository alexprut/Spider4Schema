<?php
/**
 * A list of possible product availablity options.
 *
 * @see    http://schema.org/ItemAvailability
 * @since  1.0
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
