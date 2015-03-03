<?php
/**
 * A list of items of any sort—for example, Top 10 Movies About Weathermen, or Top 100 Party Songs. Not to be confused with HTML lists, which are often used only for formatting.
 *
 * @see    http://schema.org/ItemList
*/
abstract class TypeItemList extends TypeIntangible
{
	/**
	 * The Schema.org Type Scope
	 *
	 * @var string
	 */
	protected static $scope = 'https://schema.org/ItemList';

	/**
	 * For itemListElement values, you can use simple strings (e.g. "Peter", "Paul", "Mary"), existing entities, or use ListItem. Text values are best if the elements in the list are plain strings. Existing entities are best for a simple, unordered list of existing things in your data. ListItem is used with ordered lists when you want to provide additional context about the element in that list or when the same item might be in different places in different lists. Note: The order of elements in your mark-up is not sufficient for indicating the order or elements. Use ListItem with a 'position' property in such cases.
	 * Expected Type: Text, ListItem, Thing
	 * 
	 * @var	array
	 */
	protected static $itemListElement = array('value' => 'itemListElement',
		'expectedTypes' => array('Text', 'ListItem', 'Thing')
	);

	/**
	 * Type of ordering (e.g. Ascending, Descending, Unordered).
	 * Expected Type: Text, ItemListOrderType
	 * 
	 * @var	array
	 */
	protected static $itemListOrder = array('value' => 'itemListOrder',
		'expectedTypes' => array('Text', 'ItemListOrderType')
	);

	/**
	 * The number of items in an ItemList. Note that some descriptions might not full describe all items in a list (e.g. multi-page pagination).
	 * Expected Type: Number
	 * 
	 * @var	array
	 */
	protected static $numberOfItems = array('value' => 'numberOfItems',
		'expectedTypes' => array('Number')
	);

	/**
	 * Return the 'itemListElement' Property value
	 *
	 * @return	string
	 */
	public static function pItemListElement()
	{
		return self::getValue(self::$itemListElement);
	}

	/**
	 * Return the 'itemListOrder' Property value
	 *
	 * @return	string
	 */
	public static function pItemListOrder()
	{
		return self::getValue(self::$itemListOrder);
	}

	/**
	 * Return the 'numberOfItems' Property value
	 *
	 * @return	string
	 */
	public static function pNumberOfItems()
	{
		return self::getValue(self::$numberOfItems);
	}
}
