<?php
/**
 * Server that provides game interaction in a multiplayer game.
 *
 * @see    http://schema.org/GameServer
*/
abstract class TypeGameServer extends TypeIntangible
{
	/**
	 * The Schema.org Type Scope
	 *
	 * @var string
	 */
	protected static $scope = 'https://schema.org/GameServer';

	/**
	 * Video game which is played on this server. Inverse property: gameServer.
	 * Expected Type: VideoGame
	 * 
	 * @var	array
	 */
	protected static $game = array('value' => 'game',
		'expectedTypes' => array('VideoGame')
	);

	/**
	 * Number of players on the server.
	 * Expected Type: Number
	 * 
	 * @var	array
	 */
	protected static $playersOnline = array('value' => 'playersOnline',
		'expectedTypes' => array('Number')
	);

	/**
	 * Status of a game server.
	 * Expected Type: GameServerStatus
	 * 
	 * @var	array
	 */
	protected static $serverStatus = array('value' => 'serverStatus',
		'expectedTypes' => array('GameServerStatus')
	);

	/**
	 * Return the 'game' Property value
	 *
	 * @return	string
	 */
	public static function pGame()
	{
		return self::getValue(self::$game);
	}

	/**
	 * Return the 'playersOnline' Property value
	 *
	 * @return	string
	 */
	public static function pPlayersOnline()
	{
		return self::getValue(self::$playersOnline);
	}

	/**
	 * Return the 'serverStatus' Property value
	 *
	 * @return	string
	 */
	public static function pServerStatus()
	{
		return self::getValue(self::$serverStatus);
	}
}
