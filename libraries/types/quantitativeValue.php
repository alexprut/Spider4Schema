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
 *  A point value or interval for product characteristics and other purposes.
 *
 * @package     Joomla.Platform
 * @subpackage  Microdata
 *
 * @see         http://schema.org/QuantitativeValue
 * @since       13.1
*/
abstract class TypeQuantitativeValue extends TypeStructuredValue
{
	/**
	 * The Schema.org Type Scope
	 *
	 * @var string
	 */
	protected static $scope = 'https://schema.org/QuantitativeValue';

	/**
	 * The upper of the product characteristic.
	 * Expected Type: Number
	 * 
	 * @var	array
	 */
	protected static $maxValue = array('value' => 'maxValue',
		'expectedTypes' => array('Number')
	);

	/**
	 * The lower value of the product characteristic.
	 * Expected Type: Number
	 * 
	 * @var	array
	 */
	protected static $minValue = array('value' => 'minValue',
		'expectedTypes' => array('Number')
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
	 * The value of the product characteristic.
	 * Expected Type: Number
	 * 
	 * @var	array
	 */
	protected static $value = array('value' => 'value',
		'expectedTypes' => array('Number')
	);

	/**
	 * A pointer to a secondary value that provides additional information on the original value, e.g. a reference temperature.
	 * Expected Type: Enumeration', 'StructuredValue
	 * 
	 * @var	array
	 */
	protected static $valueReference = array('value' => 'valueReference',
		'expectedTypes' => array('Enumeration', 'StructuredValue')
	);

	/**
	 * Return the 'maxValue' Property value
	 *
	 * @return	string
	 */
	public static function pMaxValue()
	{
		return self::getValue(self::$maxValue);
	}

	/**
	 * Return the 'minValue' Property value
	 *
	 * @return	string
	 */
	public static function pMinValue()
	{
		return self::getValue(self::$minValue);
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

	/**
	 * Return the 'value' Property value
	 *
	 * @return	string
	 */
	public static function pValue()
	{
		return self::getValue(self::$value);
	}

	/**
	 * Return the 'valueReference' Property value
	 *
	 * @return	string
	 */
	public static function pValueReference()
	{
		return self::getValue(self::$valueReference);
	}
}
