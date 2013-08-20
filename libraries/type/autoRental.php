<?php
/**
 * A car rental business.
 *
 * @see    http://schema.org/AutoRental
 * @since  1.0
*/
abstract class TypeAutoRental extends TypeAutomotiveBusiness
{
	/**
	 * The Schema.org Type Scope
	 *
	 * @var string
	 */
	protected static $scope = 'https://schema.org/AutoRental';
}
