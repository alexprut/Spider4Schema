<?php
/**
 * A list of items of any sort—for example, Top 10 Movies About Weathermen, or Top 100 Party Songs. Not to be confused with HTML lists, which are often used only for formatting.
 *
 * @see    http://schema.org/ItemList
 * @since  1.0
*/
abstract class TypeItemList extends TypeCreativeWork
{
	/**
	 * The Schema.org Type Scope
	 *
	 * @var string
	 */
	protected static $scope = 'https://schema.org/ItemList';

	/**
	 * A single list item.
	 * Expected Type: Text
	 * 
	 * @var	array
	 */
	protected static $itemListElement = array('value' => 'itemListElement',
		'expectedTypes' => array('Text')
	);

	/**
	 * Type of ordering (e.g. Ascending, Descending, Unordered).
	 * Expected Type: Text
	 * 
	 * @var	array
	 */
	protected static $itemListOrder = array('value' => 'itemListOrder',
		'expectedTypes' => array('Text')
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
}
