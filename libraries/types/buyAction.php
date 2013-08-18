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
 * The act of giving money to a seller in exchange for goods or services rendered. An agent buys an object, product, or service from a seller for a price. Reciprocal of SellAction.
 *
 * @package     Joomla.Platform
 * @subpackage  Microdata
 *
 * @see         http://schema.org/BuyAction
 * @since       13.1
*/
abstract class TypeBuyAction extends TypeTradeAction
{
	/**
	 * The Schema.org Type Scope
	 *
	 * @var string
	 */
	protected static $scope = 'https://schema.org/BuyAction';

	/**
	 * A sub property of participant. The seller.The participant/person/organization that sold the object.
	 * Expected Type: Organization, Person
	 * 
	 * @var	array
	 */
	protected static $vendor = array('value' => 'vendor',
		'expectedTypes' => array('Organization', 'Person')
	);

	/**
	 * The warranty promise(s) included in the offer.
	 * Expected Type: WarrantyPromise
	 * 
	 * @var	array
	 */
	protected static $warrantyPromise = array('value' => 'warrantyPromise',
		'expectedTypes' => array('WarrantyPromise')
	);

	/**
	 * Return the 'vendor' Property value
	 *
	 * @return	string
	 */
	public static function pVendor()
	{
		return self::getValue(self::$vendor);
	}

	/**
	 * Return the 'warrantyPromise' Property value
	 *
	 * @return	string
	 */
	public static function pWarrantyPromise()
	{
		return self::getValue(self::$warrantyPromise);
	}
}