<?php
/**
 * The Game type represents things which are games. These are typically rule-governed recreational activities, e.g. role-playing games in which players assume the role of characters in a fictional setting. See also open issues list.
 *
 * @see    http://schema.org/Game
*/
abstract class TypeGame extends TypeCreativeWork
{
	/**
	 * The Schema.org Type Scope
	 *
	 * @var string
	 */
	protected static $scope = 'https://schema.org/Game';

	/**
	 * A piece of data that represents a particular aspect of a fictional character (skill, power, character points, advantage, disadvantage).
	 * Expected Type: Thing
	 * 
	 * @var	array
	 */
	protected static $characterAttribute = array('value' => 'characterAttribute',
		'expectedTypes' => array('Thing')
	);

	/**
	 * An item is an object within the game world that can be collected by a player or, occasionally, a non-player character.
	 * Expected Type: Thing
	 * 
	 * @var	array
	 */
	protected static $gameItem = array('value' => 'gameItem',
		'expectedTypes' => array('Thing')
	);

	/**
	 * Real or fictional location of the game (or part of game).
	 * Expected Type: Place, PostalAddress, URL
	 * 
	 * @var	array
	 */
	protected static $gameLocation = array('value' => 'gameLocation',
		'expectedTypes' => array('Place', 'PostalAddress', 'URL')
	);

	/**
	 * Indicate how many people can play this game (minimum, maximum, or range).
	 * Expected Type: QuantitativeValue
	 * 
	 * @var	array
	 */
	protected static $numberOfPlayers = array('value' => 'numberOfPlayers',
		'expectedTypes' => array('QuantitativeValue')
	);

	/**
	 * The task that a player-controlled character, or group of characters may complete in order to gain a reward.
	 * Expected Type: Thing
	 * 
	 * @var	array
	 */
	protected static $quest = array('value' => 'quest',
		'expectedTypes' => array('Thing')
	);

	/**
	 * Return the 'characterAttribute' Property value
	 *
	 * @return	string
	 */
	public static function pCharacterAttribute()
	{
		return self::getValue(self::$characterAttribute);
	}

	/**
	 * Return the 'gameItem' Property value
	 *
	 * @return	string
	 */
	public static function pGameItem()
	{
		return self::getValue(self::$gameItem);
	}

	/**
	 * Return the 'gameLocation' Property value
	 *
	 * @return	string
	 */
	public static function pGameLocation()
	{
		return self::getValue(self::$gameLocation);
	}

	/**
	 * Return the 'numberOfPlayers' Property value
	 *
	 * @return	string
	 */
	public static function pNumberOfPlayers()
	{
		return self::getValue(self::$numberOfPlayers);
	}

	/**
	 * Return the 'quest' Property value
	 *
	 * @return	string
	 */
	public static function pQuest()
	{
		return self::getValue(self::$quest);
	}
}
