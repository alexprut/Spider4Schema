<?php
/**
 * The act of giving money to a seller in exchange for goods or services rendered. An agent buys an object, product, or service from a seller for a price. Reciprocal of SellAction.
 *
 * @see    http://schema.org/BuyAction
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
	 * An entity which offers (sells / leases / lends / loans) the services / goods. A seller may also be a provider. Supersedes merchant, vendor.
	 * Expected Type: Organization, Person
	 * 
	 * @var	array
	 */
	protected static $seller = array('value' => 'seller',
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
	 * Return the 'seller' Property value
	 *
	 * @return	string
	 */
	public static function pSeller()
	{
		return self::getValue(self::$seller);
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
