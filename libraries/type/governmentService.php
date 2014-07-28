<?php
/**
 * A service provided by a government organization, e.g. food stamps, veterans benefits, etc.
 *
 * @see    http://schema.org/GovernmentService
*/
abstract class TypeGovernmentService extends TypeService
{
	/**
	 * The Schema.org Type Scope
	 *
	 * @var string
	 */
	protected static $scope = 'https://schema.org/GovernmentService';

	/**
	 * The operating organization, if different from the provider. This enables the representation of services that are provided by an organization, but operated by another organization like a subcontractor.
	 * Expected Type: Organization
	 * 
	 * @var	array
	 */
	protected static $serviceOperator = array('value' => 'serviceOperator',
		'expectedTypes' => array('Organization')
	);

	/**
	 * Return the 'serviceOperator' Property value
	 *
	 * @return	string
	 */
	public static function pServiceOperator()
	{
		return self::getValue(self::$serviceOperator);
	}
}
