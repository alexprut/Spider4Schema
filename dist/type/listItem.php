<?php
/**
 * An list item, e.g. a step in a checklist or how-to description.
 *
 * @see    http://schema.org/ListItem
*/
abstract class TypeListItem extends TypeIntangible
{
	/**
	 * The Schema.org Type Scope
	 *
	 * @var string
	 */
	protected static $scope = 'https://schema.org/ListItem';

	/**
	 * An entity represented by an entry in a list (e.g. an 'artist' in a list of 'artists')’.
	 * Expected Type: Thing
	 * 
	 * @var	array
	 */
	protected static $item = array('value' => 'item',
		'expectedTypes' => array('Thing')
	);

	/**
	 * A link to the ListItem that follows the current one.
	 * Expected Type: ListItem
	 * 
	 * @var	array
	 */
	protected static $nextItem = array('value' => 'nextItem',
		'expectedTypes' => array('ListItem')
	);

	/**
	 * The position of an item in a series or sequence of items.
	 * Expected Type: Integer, Text
	 * 
	 * @var	array
	 */
	protected static $position = array('value' => 'position',
		'expectedTypes' => array('Integer', 'Text')
	);

	/**
	 * A link to the ListItem that preceeds the current one.
	 * Expected Type: ListItem
	 * 
	 * @var	array
	 */
	protected static $previousItem = array('value' => 'previousItem',
		'expectedTypes' => array('ListItem')
	);

	/**
	 * Return the 'item' Property value
	 *
	 * @return	string
	 */
	public static function pItem()
	{
		return self::getValue(self::$item);
	}

	/**
	 * Return the 'nextItem' Property value
	 *
	 * @return	string
	 */
	public static function pNextItem()
	{
		return self::getValue(self::$nextItem);
	}

	/**
	 * Return the 'position' Property value
	 *
	 * @return	string
	 */
	public static function pPosition()
	{
		return self::getValue(self::$position);
	}

	/**
	 * Return the 'previousItem' Property value
	 *
	 * @return	string
	 */
	public static function pPreviousItem()
	{
		return self::getValue(self::$previousItem);
	}
}
