<?php
/**
 * The act of being defeated in a competitive activity.
 *
 * @see    http://schema.org/LoseAction
 * @since  1.0
*/
abstract class TypeLoseAction extends TypeAchieveAction
{
	/**
	 * The Schema.org Type Scope
	 *
	 * @var string
	 */
	protected static $scope = 'https://schema.org/LoseAction';

	/**
	 * A sub property of participant. The winner of the action.
	 * Expected Type: Person
	 * 
	 * @var	array
	 */
	protected static $winner = array('value' => 'winner',
		'expectedTypes' => array('Person')
	);

	/**
	 * Return the 'winner' Property value
	 *
	 * @return	string
	 */
	public static function pWinner()
	{
		return self::getValue(self::$winner);
	}
}
