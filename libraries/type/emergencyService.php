<?php
/**
 * An emergency service, such as a fire station or ER.
 *
 * @see    http://schema.org/EmergencyService
*/
abstract class TypeEmergencyService extends TypeLocalBusiness
{
	/**
	 * The Schema.org Type Scope
	 *
	 * @var string
	 */
	protected static $scope = 'https://schema.org/EmergencyService';
}
