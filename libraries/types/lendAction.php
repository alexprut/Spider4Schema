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
 * The act of providing an object under an agreement that it will be returned at a later date. Reciprocal of BorrowAction.Related actions:BorrowAction: Reciprocal of LendAction.
 *
 * @package     Joomla.Platform
 * @subpackage  Microdata
 *
 * @see         http://schema.org/LendAction
 * @since       13.1
*/
abstract class TypeLendAction extends TypeTransferAction
{
	/**
	 * The Schema.org Type Scope
	 *
	 * @var string
	 */
	protected static $scope = 'https://schema.org/LendAction';

	/**
	 * A sub property of participant. The person that borrows the object being lent.
	 * Expected Type: Person
	 * 
	 * @var	array
	 */
	protected static $borrower = array('value' => 'borrower',
		'expectedTypes' => array('Person')
	);

	/**
	 * Return the 'borrower' Property value
	 *
	 * @return	string
	 */
	public static function pBorrower()
	{
		return self::getValue(self::$borrower);
	}
}
