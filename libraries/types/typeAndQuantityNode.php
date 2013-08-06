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
 * A structured value indicating the quantity, unit of measurement, and business function of goods included in a bundle offer.
 *
 * @package     Joomla.Platform
 * @subpackage  Microdata
 *
 * @see         http://schema.org/TypeAndQuantityNode
 * @since       13.1
*/
abstract class TypeTypeAndQuantityNode extends TypeStructuredValue
{
	/**
	 * The Schema.org Type Scope
	 *
	 * @var string
	 */
	protected static $scope = 'https://schema.org/TypeAndQuantityNode';

	/**
	 * The quantity of the goods included in the offer.
	 * Expected Type: Number
	 * 
	 * @var	array
	 */
	protected static $amountOfThisGood = array('value' => 'amountOfThisGood',
		'expectedTypes' => array('Number')
	);

	/**
	 * The business function (e.g. sell, lease, repair, dispose) of the offer or component of a bundle (TypeAndQuantityNode). The default is http://purl.org/goodrelations/v1#Sell.
	 * Expected Type: BusinessFunction
	 * 
	 * @var	array
	 */
	protected static $businessFunction = array('value' => 'businessFunction',
		'expectedTypes' => array('BusinessFunction')
	);

	/**
	 * The product that this structured value is referring to.
	 * Expected Type: Product
	 * 
	 * @var	array
	 */
	protected static $typeOfGood = array('value' => 'typeOfGood',
		'expectedTypes' => array('Product')
	);

	/**
	 * The unit of measurement given using the UN/CEFACT Common Code (3 characters).
	 * Expected Type: Text
	 * 
	 * @var	array
	 */
	protected static $unitCode = array('value' => 'unitCode',
		'expectedTypes' => array('Text')
	);

	/**
	 * Return the 'amountOfThisGood' Property value
	 *
	 * @return	string
	 */
	public static function pAmountOfThisGood()
	{
		return self::getValue(self::$amountOfThisGood);
	}

	/**
	 * Return the 'businessFunction' Property value
	 *
	 * @return	string
	 */
	public static function pBusinessFunction()
	{
		return self::getValue(self::$businessFunction);
	}

	/**
	 * Return the 'typeOfGood' Property value
	 *
	 * @return	string
	 */
	public static function pTypeOfGood()
	{
		return self::getValue(self::$typeOfGood);
	}

	/**
	 * Return the 'unitCode' Property value
	 *
	 * @return	string
	 */
	public static function pUnitCode()
	{
		return self::getValue(self::$unitCode);
	}
}
