<?php
/**
 * The act of an agent relocating to a place.Related actions:TransferAction: Unlike TransferAction, the subject of the move is a living Person or Organization rather than an inanimate object.
 *
 * @see    http://schema.org/MoveAction
 * @since  1.0
*/
abstract class TypeMoveAction extends TypeAction
{
	/**
	 * The Schema.org Type Scope
	 *
	 * @var string
	 */
	protected static $scope = 'https://schema.org/MoveAction';

	/**
	 * A sub property of location. The original location of the object or the agent before the action.
	 * Expected Type: Number, Place
	 * 
	 * @var	array
	 */
	protected static $fromLocation = array('value' => 'fromLocation',
		'expectedTypes' => array('Number', 'Place')
	);

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
	 * Return the 'fromLocation' Property value
	 *
	 * @return	string
	 */
	public static function pFromLocation()
	{
		return self::getValue(self::$fromLocation);
	}

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
