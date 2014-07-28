<?php
/**
 * A fire station. With firemen.
 *
 * @see    http://schema.org/FireStation
*/
abstract class TypeFireStation extends TypeEmergencyService
{
	/**
	 * The Schema.org Type Scope
	 *
	 * @var string
	 */
	protected static $scope = 'https://schema.org/FireStation';
}
