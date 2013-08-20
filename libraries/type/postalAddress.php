<?php
/**
 * The mailing address.
 *
 * @see    http://schema.org/PostalAddress
 * @since  1.0
*/
abstract class TypePostalAddress extends TypeContactPoint
{
	/**
	 * The Schema.org Type Scope
	 *
	 * @var string
	 */
	protected static $scope = 'https://schema.org/PostalAddress';

	/**
	 * The country. For example, USA. You can also provide the two-letter ISO 3166-1 alpha-2 country code.
	 * Expected Type: Country
	 * 
	 * @var	array
	 */
	protected static $addressCountry = array('value' => 'addressCountry',
		'expectedTypes' => array('Country')
	);

	/**
	 * The locality. For example, Mountain View.
	 * Expected Type: Text
	 * 
	 * @var	array
	 */
	protected static $addressLocality = array('value' => 'addressLocality',
		'expectedTypes' => array('Text')
	);

	/**
	 * The region. For example, CA.
	 * Expected Type: Text
	 * 
	 * @var	array
	 */
	protected static $addressRegion = array('value' => 'addressRegion',
		'expectedTypes' => array('Text')
	);

	/**
	 * The postal code. For example, 94043.
	 * Expected Type: Text
	 * 
	 * @var	array
	 */
	protected static $postalCode = array('value' => 'postalCode',
		'expectedTypes' => array('Text')
	);

	/**
	 * The post offce box number for PO box addresses.
	 * Expected Type: Text
	 * 
	 * @var	array
	 */
	protected static $postOfficeBoxNumber = array('value' => 'postOfficeBoxNumber',
		'expectedTypes' => array('Text')
	);

	/**
	 * The street address. For example, 1600 Amphitheatre Pkwy.
	 * Expected Type: Text
	 * 
	 * @var	array
	 */
	protected static $streetAddress = array('value' => 'streetAddress',
		'expectedTypes' => array('Text')
	);

	/**
	 * Return the 'addressCountry' Property value
	 *
	 * @return	string
	 */
	public static function pAddressCountry()
	{
		return self::getValue(self::$addressCountry);
	}

	/**
	 * Return the 'addressLocality' Property value
	 *
	 * @return	string
	 */
	public static function pAddressLocality()
	{
		return self::getValue(self::$addressLocality);
	}

	/**
	 * Return the 'addressRegion' Property value
	 *
	 * @return	string
	 */
	public static function pAddressRegion()
	{
		return self::getValue(self::$addressRegion);
	}

	/**
	 * Return the 'postalCode' Property value
	 *
	 * @return	string
	 */
	public static function pPostalCode()
	{
		return self::getValue(self::$postalCode);
	}

	/**
	 * Return the 'postOfficeBoxNumber' Property value
	 *
	 * @return	string
	 */
	public static function pPostOfficeBoxNumber()
	{
		return self::getValue(self::$postOfficeBoxNumber);
	}

	/**
	 * Return the 'streetAddress' Property value
	 *
	 * @return	string
	 */
	public static function pStreetAddress()
	{
		return self::getValue(self::$streetAddress);
	}
}
