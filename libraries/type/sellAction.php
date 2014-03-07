<?php
/**
 * The act of taking money from a buyer in exchange for goods or services rendered. An agent sells an object, product, or service to a buyer for a price. Reciprocal of BuyAction.
 *
 * @see    http://schema.org/SellAction
*/
abstract class TypeSellAction extends TypeTradeAction
{
	/**
	 * The Schema.org Type Scope
	 *
	 * @var string
	 */
	protected static $scope = 'https://schema.org/SellAction';

	/**
	 * A sub property of participant. The participant/person/organization that bought the object.
	 * Expected Type: Person
	 * 
	 * @var	array
	 */
	protected static $buyer = array('value' => 'buyer',
		'expectedTypes' => array('Person')
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
	 * Return the 'buyer' Property value
	 *
	 * @return	string
	 */
	public static function pBuyer()
	{
		return self::getValue(self::$buyer);
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
