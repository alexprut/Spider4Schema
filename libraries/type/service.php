<?php
/**
 * A service provided by an organization, e.g. delivery service, print services, etc.
 *
 * @see    http://schema.org/Service
*/
abstract class TypeService extends TypeIntangible
{
	/**
	 * The Schema.org Type Scope
	 *
	 * @var string
	 */
	protected static $scope = 'https://schema.org/Service';

	/**
	 * A means of accessing the service (e.g. a phone bank, a web site, a location, etc.)
	 * Expected Type: ServiceChannel
	 * 
	 * @var	array
	 */
	protected static $availableChannel = array('value' => 'availableChannel',
		'expectedTypes' => array('ServiceChannel')
	);

	/**
	 * The tangible thing generated by the service, e.g. a passport, permit, etc.
	 * Expected Type: Thing
	 * 
	 * @var	array
	 */
	protected static $produces = array('value' => 'produces',
		'expectedTypes' => array('Thing')
	);

	/**
	 * The organization or agency that is providing the service.
	 * Expected Type: Organization, Person
	 * 
	 * @var	array
	 */
	protected static $provider = array('value' => 'provider',
		'expectedTypes' => array('Organization', 'Person')
	);

	/**
	 * The geographic area where the service is provided.
	 * Expected Type: AdministrativeArea
	 * 
	 * @var	array
	 */
	protected static $serviceArea = array('value' => 'serviceArea',
		'expectedTypes' => array('AdministrativeArea')
	);

	/**
	 * The audience eligible for this service.
	 * Expected Type: Audience
	 * 
	 * @var	array
	 */
	protected static $serviceAudience = array('value' => 'serviceAudience',
		'expectedTypes' => array('Audience')
	);

	/**
	 * The type of service being offered, e.g. veterans' benefits, emergency relief, etc.
	 * Expected Type: Text
	 * 
	 * @var	array
	 */
	protected static $serviceType = array('value' => 'serviceType',
		'expectedTypes' => array('Text')
	);

	/**
	 * Return the 'availableChannel' Property value
	 *
	 * @return	string
	 */
	public static function pAvailableChannel()
	{
		return self::getValue(self::$availableChannel);
	}

	/**
	 * Return the 'produces' Property value
	 *
	 * @return	string
	 */
	public static function pProduces()
	{
		return self::getValue(self::$produces);
	}

	/**
	 * Return the 'provider' Property value
	 *
	 * @return	string
	 */
	public static function pProvider()
	{
		return self::getValue(self::$provider);
	}

	/**
	 * Return the 'serviceArea' Property value
	 *
	 * @return	string
	 */
	public static function pServiceArea()
	{
		return self::getValue(self::$serviceArea);
	}

	/**
	 * Return the 'serviceAudience' Property value
	 *
	 * @return	string
	 */
	public static function pServiceAudience()
	{
		return self::getValue(self::$serviceAudience);
	}

	/**
	 * Return the 'serviceType' Property value
	 *
	 * @return	string
	 */
	public static function pServiceType()
	{
		return self::getValue(self::$serviceType);
	}
}
