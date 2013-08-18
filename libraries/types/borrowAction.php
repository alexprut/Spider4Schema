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
 * The act of obtaining an object under an agreement to return it at a later date. Reciprocal of LendAction.Related actions:LendAction: Reciprocal of BorrowAction.
 *
 * @package     Joomla.Platform
 * @subpackage  Microdata
 *
 * @see         http://schema.org/BorrowAction
 * @since       13.1
*/
abstract class TypeBorrowAction extends TypeTransferAction
{
	/**
	 * The Schema.org Type Scope
	 *
	 * @var string
	 */
	protected static $scope = 'https://schema.org/BorrowAction';

	/**
	 * A sub property of participant. The person that lends the object being borrowed.
	 * Expected Type: Person
	 * 
	 * @var	array
	 */
	protected static $lender = array('value' => 'lender',
		'expectedTypes' => array('Person')
	);

	/**
	 * Return the 'lender' Property value
	 *
	 * @return	string
	 */
	public static function pLender()
	{
		return self::getValue(self::$lender);
	}
}
