<?php
/**
 * The act of obtaining an object under an agreement to return it at a later date. Reciprocal of LendAction.Related actions:LendAction: Reciprocal of BorrowAction.
 *
 * @see    http://schema.org/BorrowAction
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
