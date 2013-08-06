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
 * A structured value representing the duration and scope of services that will be provided to a customer free of charge in case of a defect or malfunction of a product.
 *
 * @package     Joomla.Platform
 * @subpackage  Microdata
 *
 * @see         http://schema.org/WarrantyPromise
 * @since       13.1
*/
abstract class TypeWarrantyPromise extends TypeStructuredValue
{
	/**
	 * The Schema.org Type Scope
	 *
	 * @var string
	 */
	protected static $scope = 'https://schema.org/WarrantyPromise';

	/**
	 * The duration of the warranty promise. Common unitCode values are ANN for year, MON for months, or DAY for days.
	 * Expected Type: QuantitativeValue
	 * 
	 * @var	array
	 */
	protected static $durationOfWarranty = array('value' => 'durationOfWarranty',
		'expectedTypes' => array('QuantitativeValue')
	);

	/**
	 * The scope of the warranty promise.
	 * Expected Type: WarrantyScope
	 * 
	 * @var	array
	 */
	protected static $warrantyScope = array('value' => 'warrantyScope',
		'expectedTypes' => array('WarrantyScope')
	);

	/**
	 * Return the 'durationOfWarranty' Property value
	 *
	 * @return	string
	 */
	public static function pDurationOfWarranty()
	{
		return self::getValue(self::$durationOfWarranty);
	}

	/**
	 * Return the 'warrantyScope' Property value
	 *
	 * @return	string
	 */
	public static function pWarrantyScope()
	{
		return self::getValue(self::$warrantyScope);
	}
}
