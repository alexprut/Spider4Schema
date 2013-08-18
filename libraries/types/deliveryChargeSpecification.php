<?php
/**
 * @package     Joomla.Platform
 * @subpackage  Microdata
 *
 * @copyright   Copyright (C) 2005 - 2013 Open Source Matters, Inc. All rights reserved.
 * @license     GNU General Public License version 2 or later; see LICENSE
 */

defined("JPATH_PLATFORM") or die;

/**
 * The price for the delivery of an offer using a particular delivery method.
 *
 * @package     Joomla.Platform
 * @subpackage  Microdata
 *
 * @see         http://schema.org/DeliveryChargeSpecification
 * @since       13.1
*/
abstract class TypeDeliveryChargeSpecification extends TypePriceSpecification
{
	/**
	 * The Schema.org Type Scope
	 *
	 * @var string
	 */
	protected static $scope = 'https://schema.org/DeliveryChargeSpecification';

	/**
	 * The delivery method(s) to which the delivery charge or payment charge specification applies.
	 * Expected Type: DeliveryMethod
	 * 
	 * @var	array
	 */
	protected static $appliesToDeliveryMethod = array('value' => 'appliesToDeliveryMethod',
		'expectedTypes' => array('DeliveryMethod')
	);

	/**
	 * The ISO 3166-1 (ISO 3166-1 alpha-2) or ISO 3166-2 code, or the GeoShape for the geo-political region(s) for which the offer or delivery charge specification is valid.
	 * Expected Type: GeoShape, Text
	 * 
	 * @var	array
	 */
	protected static $eligibleRegion = array('value' => 'eligibleRegion',
		'expectedTypes' => array('GeoShape', 'Text')
	);

	/**
	 * Return the 'appliesToDeliveryMethod' Property value
	 *
	 * @return	string
	 */
	public static function pAppliesToDeliveryMethod()
	{
		return self::getValue(self::$appliesToDeliveryMethod);
	}

	/**
	 * Return the 'eligibleRegion' Property value
	 *
	 * @return	string
	 */
	public static function pEligibleRegion()
	{
		return self::getValue(self::$eligibleRegion);
	}
}
