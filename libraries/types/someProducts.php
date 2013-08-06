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
 * A placeholder for multiple similar products of the same kind.
 *
 * @package     Joomla.Platform
 * @subpackage  Microdata
 *
 * @see         http://schema.org/SomeProducts
 * @since       13.1
*/
abstract class TypeSomeProducts extends TypeProduct
{
	/**
	 * The Schema.org Type Scope
	 *
	 * @var string
	 */
	protected static $scope = 'https://schema.org/SomeProducts';

	/**
	 * The current approximate inventory level for the item or items.
	 * Expected Type: QuantitativeValue
	 * 
	 * @var	array
	 */
	protected static $inventoryLevel = array('value' => 'inventoryLevel',
		'expectedTypes' => array('QuantitativeValue')
	);

	/**
	 * Return the 'inventoryLevel' Property value
	 *
	 * @return	string
	 */
	public static function pInventoryLevel()
	{
		return self::getValue(self::$inventoryLevel);
	}
}
