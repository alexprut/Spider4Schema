<?php
/**
 * The act of achieving victory in a competitive activity.
 *
 * @see    http://schema.org/WinAction
*/
abstract class TypeWinAction extends TypeAchieveAction
{
	/**
	 * The Schema.org Type Scope
	 *
	 * @var string
	 */
	protected static $scope = 'https://schema.org/WinAction';

	/**
	 * A sub property of participant. The loser of the action.
	 * Expected Type: Person
	 * 
	 * @var	array
	 */
	protected static $loser = array('value' => 'loser',
		'expectedTypes' => array('Person')
	);

	/**
	 * Return the 'loser' Property value
	 *
	 * @return	string
	 */
	public static function pLoser()
	{
		return self::getValue(self::$loser);
	}
}
