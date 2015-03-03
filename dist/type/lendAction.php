<?php
/**
 * The act of providing an object under an agreement that it will be returned at a later date. Reciprocal of BorrowAction.Related actions:BorrowAction: Reciprocal of LendAction.
 *
 * @see    http://schema.org/LendAction
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
