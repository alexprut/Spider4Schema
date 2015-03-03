<?php
/**
 * A video game is an electronic game that involves human interaction with a user interface to generate visual feedback on a video device.
 *
 * @see    http://schema.org/VideoGame
*/
abstract class TypeVideoGame extends TypeSoftwareApplication
{
	/**
	 * The Schema.org Type Scope
	 *
	 * @var string
	 */
	protected static $scope = 'https://schema.org/VideoGame';

	/**
	 * An actor, e.g. in tv, radio, movie, video games etc. Actors can be associated with individual items or with a series, episode, clip. Supersedes actors.
	 * Expected Type: Person
	 * 
	 * @var	array
	 */
	protected static $actor = array('value' => 'actor',
		'expectedTypes' => array('Person')
	);

	/**
	 * Cheat codes to the game.
	 * Expected Type: CreativeWork
	 * 
	 * @var	array
	 */
	protected static $cheatCode = array('value' => 'cheatCode',
		'expectedTypes' => array('CreativeWork')
	);

	/**
	 * A director of e.g. tv, radio, movie, video games etc. content. Directors can be associated with individual items or with a series, episode, clip. Supersedes directors.
	 * Expected Type: Person
	 * 
	 * @var	array
	 */
	protected static $director = array('value' => 'director',
		'expectedTypes' => array('Person')
	);

	/**
	 * The electronic systems used to play video games.
	 * Expected Type: URL, Text, Thing
	 * 
	 * @var	array
	 */
	protected static $gamePlatform = array('value' => 'gamePlatform',
		'expectedTypes' => array('URL', 'Text', 'Thing')
	);

	/**
	 * The server on which it is possible to play the game. Inverse property: game.
	 * Expected Type: GameServer
	 * 
	 * @var	array
	 */
	protected static $gameServer = array('value' => 'gameServer',
		'expectedTypes' => array('GameServer')
	);

	/**
	 * Links to tips, tactics, etc.
	 * Expected Type: CreativeWork
	 * 
	 * @var	array
	 */
	protected static $gameTip = array('value' => 'gameTip',
		'expectedTypes' => array('CreativeWork')
	);

	/**
	 * The composer of the soundtrack.
	 * Expected Type: MusicGroup, Person
	 * 
	 * @var	array
	 */
	protected static $musicBy = array('value' => 'musicBy',
		'expectedTypes' => array('MusicGroup', 'Person')
	);

	/**
	 * Indicates whether this game is multi-player, co-op or single-player. The game can be marked as multi-player, co-op and single-player at the same time.
	 * Expected Type: GamePlayMode
	 * 
	 * @var	array
	 */
	protected static $playMode = array('value' => 'playMode',
		'expectedTypes' => array('GamePlayMode')
	);

	/**
	 * The trailer of a movie or tv/radio series, season, episode, etc.
	 * Expected Type: VideoObject
	 * 
	 * @var	array
	 */
	protected static $trailer = array('value' => 'trailer',
		'expectedTypes' => array('VideoObject')
	);

	/**
	 * Return the 'actor' Property value
	 *
	 * @return	string
	 */
	public static function pActor()
	{
		return self::getValue(self::$actor);
	}

	/**
	 * Return the 'cheatCode' Property value
	 *
	 * @return	string
	 */
	public static function pCheatCode()
	{
		return self::getValue(self::$cheatCode);
	}

	/**
	 * Return the 'director' Property value
	 *
	 * @return	string
	 */
	public static function pDirector()
	{
		return self::getValue(self::$director);
	}

	/**
	 * Return the 'gamePlatform' Property value
	 *
	 * @return	string
	 */
	public static function pGamePlatform()
	{
		return self::getValue(self::$gamePlatform);
	}

	/**
	 * Return the 'gameServer' Property value
	 *
	 * @return	string
	 */
	public static function pGameServer()
	{
		return self::getValue(self::$gameServer);
	}

	/**
	 * Return the 'gameTip' Property value
	 *
	 * @return	string
	 */
	public static function pGameTip()
	{
		return self::getValue(self::$gameTip);
	}

	/**
	 * Return the 'musicBy' Property value
	 *
	 * @return	string
	 */
	public static function pMusicBy()
	{
		return self::getValue(self::$musicBy);
	}

	/**
	 * Return the 'playMode' Property value
	 *
	 * @return	string
	 */
	public static function pPlayMode()
	{
		return self::getValue(self::$playMode);
	}

	/**
	 * Return the 'trailer' Property value
	 *
	 * @return	string
	 */
	public static function pTrailer()
	{
		return self::getValue(self::$trailer);
	}
}
