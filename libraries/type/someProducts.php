<?php
/**
 * A placeholder for multiple similar products of the same kind.
 *
 * @see    http://schema.org/SomeProducts
 * @since  1.0
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
