<?php
/**
 * A means for accessing a service, e.g. a government office location, web site, or phone number.
 *
 * @see    http://schema.org/ServiceChannel
*/
abstract class TypeServiceChannel extends TypeIntangible
{
	/**
	 * The Schema.org Type Scope
	 *
	 * @var string
	 */
	protected static $scope = 'https://schema.org/ServiceChannel';

	/**
	 * A language someone may use with the item.
	 * Expected Type: Language
	 * 
	 * @var	array
	 */
	protected static $availableLanguage = array('value' => 'availableLanguage',
		'expectedTypes' => array('Language')
	);

	/**
	 * Estimated processing time for the service using this channel.
	 * Expected Type: Duration
	 * 
	 * @var	array
	 */
	protected static $processingTime = array('value' => 'processingTime',
		'expectedTypes' => array('Duration')
	);

	/**
	 * The service provided by this channel.
	 * Expected Type: Service
	 * 
	 * @var	array
	 */
	protected static $providesService = array('value' => 'providesService',
		'expectedTypes' => array('Service')
	);

	/**
	 * The location (e.g. civic structure, local business, etc.) where a person can go to access the service.
	 * Expected Type: Place
	 * 
	 * @var	array
	 */
	protected static $serviceLocation = array('value' => 'serviceLocation',
		'expectedTypes' => array('Place')
	);

	/**
	 * The phone number to use to access the service.
	 * Expected Type: ContactPoint
	 * 
	 * @var	array
	 */
	protected static $servicePhone = array('value' => 'servicePhone',
		'expectedTypes' => array('ContactPoint')
	);

	/**
	 * The address for accessing the service by mail.
	 * Expected Type: PostalAddress
	 * 
	 * @var	array
	 */
	protected static $servicePostalAddress = array('value' => 'servicePostalAddress',
		'expectedTypes' => array('PostalAddress')
	);

	/**
	 * The number to access the service by text message.
	 * Expected Type: ContactPoint
	 * 
	 * @var	array
	 */
	protected static $serviceSmsNumber = array('value' => 'serviceSmsNumber',
		'expectedTypes' => array('ContactPoint')
	);

	/**
	 * The website to access the service.
	 * Expected Type: URL
	 * 
	 * @var	array
	 */
	protected static $serviceUrl = array('value' => 'serviceUrl',
		'expectedTypes' => array('URL')
	);

	/**
	 * Return the 'availableLanguage' Property value
	 *
	 * @return	string
	 */
	public static function pAvailableLanguage()
	{
		return self::getValue(self::$availableLanguage);
	}

	/**
	 * Return the 'processingTime' Property value
	 *
	 * @return	string
	 */
	public static function pProcessingTime()
	{
		return self::getValue(self::$processingTime);
	}

	/**
	 * Return the 'providesService' Property value
	 *
	 * @return	string
	 */
	public static function pProvidesService()
	{
		return self::getValue(self::$providesService);
	}

	/**
	 * Return the 'serviceLocation' Property value
	 *
	 * @return	string
	 */
	public static function pServiceLocation()
	{
		return self::getValue(self::$serviceLocation);
	}

	/**
	 * Return the 'servicePhone' Property value
	 *
	 * @return	string
	 */
	public static function pServicePhone()
	{
		return self::getValue(self::$servicePhone);
	}

	/**
	 * Return the 'servicePostalAddress' Property value
	 *
	 * @return	string
	 */
	public static function pServicePostalAddress()
	{
		return self::getValue(self::$servicePostalAddress);
	}

	/**
	 * Return the 'serviceSmsNumber' Property value
	 *
	 * @return	string
	 */
	public static function pServiceSmsNumber()
	{
		return self::getValue(self::$serviceSmsNumber);
	}

	/**
	 * Return the 'serviceUrl' Property value
	 *
	 * @return	string
	 */
	public static function pServiceUrl()
	{
		return self::getValue(self::$serviceUrl);
	}
}
