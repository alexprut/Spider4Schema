<?php
/**
 * A contact point—for example, a Customer Complaints department.
 *
 * @see    http://schema.org/ContactPoint
*/
abstract class TypeContactPoint extends TypeStructuredValue
{
	/**
	 * The Schema.org Type Scope
	 *
	 * @var string
	 */
	protected static $scope = 'https://schema.org/ContactPoint';

	/**
	 * The location served by this contact point (e.g., a phone number intended for Europeans vs. North Americans or only within the United States).
	 * Expected Type: AdministrativeArea
	 * 
	 * @var	array
	 */
	protected static $areaServed = array('value' => 'areaServed',
		'expectedTypes' => array('AdministrativeArea')
	);

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
	 * An option available on this contact point (e.g. a toll-free number or support for hearing-impaired callers).
	 * Expected Type: ContactPointOption
	 * 
	 * @var	array
	 */
	protected static $contactOption = array('value' => 'contactOption',
		'expectedTypes' => array('ContactPointOption')
	);

	/**
	 * A person or organization can have different contact points, for different purposes. For example, a sales contact point, a PR contact point and so on. This property is used to specify the kind of contact point.
	 * Expected Type: Text
	 * 
	 * @var	array
	 */
	protected static $contactType = array('value' => 'contactType',
		'expectedTypes' => array('Text')
	);

	/**
	 * Email address.
	 * Expected Type: Text
	 * 
	 * @var	array
	 */
	protected static $email = array('value' => 'email',
		'expectedTypes' => array('Text')
	);

	/**
	 * The fax number.
	 * Expected Type: Text
	 * 
	 * @var	array
	 */
	protected static $faxNumber = array('value' => 'faxNumber',
		'expectedTypes' => array('Text')
	);

	/**
	 * The hours during which this contact point is available.
	 * Expected Type: OpeningHoursSpecification
	 * 
	 * @var	array
	 */
	protected static $hoursAvailable = array('value' => 'hoursAvailable',
		'expectedTypes' => array('OpeningHoursSpecification')
	);

	/**
	 * The product or service this support contact point is related to (such as product support for a particular product line). This can be a specific product or product line (e.g. "iPhone") or a general category of products or services (e.g. "smartphones").
	 * Expected Type: Text, Product
	 * 
	 * @var	array
	 */
	protected static $productSupported = array('value' => 'productSupported',
		'expectedTypes' => array('Text', 'Product')
	);

	/**
	 * The telephone number.
	 * Expected Type: Text
	 * 
	 * @var	array
	 */
	protected static $telephone = array('value' => 'telephone',
		'expectedTypes' => array('Text')
	);

	/**
	 * Return the 'areaServed' Property value
	 *
	 * @return	string
	 */
	public static function pAreaServed()
	{
		return self::getValue(self::$areaServed);
	}

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
	 * Return the 'contactOption' Property value
	 *
	 * @return	string
	 */
	public static function pContactOption()
	{
		return self::getValue(self::$contactOption);
	}

	/**
	 * Return the 'contactType' Property value
	 *
	 * @return	string
	 */
	public static function pContactType()
	{
		return self::getValue(self::$contactType);
	}

	/**
	 * Return the 'email' Property value
	 *
	 * @return	string
	 */
	public static function pEmail()
	{
		return self::getValue(self::$email);
	}

	/**
	 * Return the 'faxNumber' Property value
	 *
	 * @return	string
	 */
	public static function pFaxNumber()
	{
		return self::getValue(self::$faxNumber);
	}

	/**
	 * Return the 'hoursAvailable' Property value
	 *
	 * @return	string
	 */
	public static function pHoursAvailable()
	{
		return self::getValue(self::$hoursAvailable);
	}

	/**
	 * Return the 'productSupported' Property value
	 *
	 * @return	string
	 */
	public static function pProductSupported()
	{
		return self::getValue(self::$productSupported);
	}

	/**
	 * Return the 'telephone' Property value
	 *
	 * @return	string
	 */
	public static function pTelephone()
	{
		return self::getValue(self::$telephone);
	}
}
