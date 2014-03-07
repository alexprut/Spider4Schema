<?php
/**
 * The act of searching for an object.Related actions:FindAction: SearchAction generally leads to a FindAction, but not necessarily.
 *
 * @see    http://schema.org/SearchAction
*/
abstract class TypeSearchAction extends TypeAction
{
	/**
	 * The Schema.org Type Scope
	 *
	 * @var string
	 */
	protected static $scope = 'https://schema.org/SearchAction';

	/**
	 * A sub property of instrument. The query used on this action.
	 * Expected Type: Class, Text
	 * 
	 * @var	array
	 */
	protected static $query = array('value' => 'query',
		'expectedTypes' => array('Class', 'Text')
	);

	/**
	 * Return the 'query' Property value
	 *
	 * @return	string
	 */
	public static function pQuery()
	{
		return self::getValue(self::$query);
	}
}
