<?php
/**
 * The act of adding at a specific location in an ordered collection.
 *
 * @see    http://schema.org/InsertAction
*/
abstract class TypeInsertAction extends TypeAddAction
{
	/**
	 * The Schema.org Type Scope
	 *
	 * @var string
	 */
	protected static $scope = 'https://schema.org/InsertAction';

	/**
	 * A sub property of location. The final location of the object or the agent after the action.
	 * Expected Type: Number, Place
	 * 
	 * @var	array
	 */
	protected static $toLocation = array('value' => 'toLocation',
		'expectedTypes' => array('Number', 'Place')
	);

	/**
	 * Return the 'toLocation' Property value
	 *
	 * @return	string
	 */
	public static function pToLocation()
	{
		return self::getValue(self::$toLocation);
	}
}
