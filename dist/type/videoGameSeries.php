<?php
/**
 * A video game series.
 *
 * @see    http://schema.org/VideoGameSeries
*/
abstract class TypeVideoGameSeries extends TypeSeries
{
	/**
	 * The Schema.org Type Scope
	 *
	 * @var string
	 */
	protected static $scope = 'https://schema.org/VideoGameSeries';

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
	 * A piece of data that represents a particular aspect of a fictional character (skill, power, character points, advantage, disadvantage).
	 * Expected Type: Thing
	 * 
	 * @var	array
	 */
	protected static $characterAttribute = array('value' => 'characterAttribute',
		'expectedTypes' => array('Thing')
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
	 * An episode of a tv, radio or game media within a series or season. Supersedes episodes.
	 * Expected Type: Episode
	 * 
	 * @var	array
	 */
	protected static $episode = array('value' => 'episode',
		'expectedTypes' => array('Episode')
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
	 * The electronic systems used to play video games.
	 * Expected Type: Text, Thing, URL
	 * 
	 * @var	array
	 */
	protected static $gamePlatform = array('value' => 'gamePlatform',
		'expectedTypes' => array('Text', 'Thing', 'URL')
	);

	/**
	 * The composer of the soundtrack.
	 * Expected Type: Person, MusicGroup
	 * 
	 * @var	array
	 */
	protected static $musicBy = array('value' => 'musicBy',
		'expectedTypes' => array('Person', 'MusicGroup')
	);

	/**
	 * The number of episodes in this season or series.
	 * Expected Type: Number
	 * 
	 * @var	array
	 */
	protected static $numberOfEpisodes = array('value' => 'numberOfEpisodes',
		'expectedTypes' => array('Number')
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
	 * The number of seasons in this series.
	 * Expected Type: Number
	 * 
	 * @var	array
	 */
	protected static $numberOfSeasons = array('value' => 'numberOfSeasons',
		'expectedTypes' => array('Number')
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
	 * The production company or studio responsible for the item e.g. series, video game, episode etc.
	 * Expected Type: Organization
	 * 
	 * @var	array
	 */
	protected static $productionCompany = array('value' => 'productionCompany',
		'expectedTypes' => array('Organization')
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
	 * A season in a media series. Supersedes seasons.
	 * Expected Type: Season
	 * 
	 * @var	array
	 */
	protected static $season = array('value' => 'season',
		'expectedTypes' => array('Season')
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
	 * Return the 'characterAttribute' Property value
	 *
	 * @return	string
	 */
	public static function pCharacterAttribute()
	{
		return self::getValue(self::$characterAttribute);
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
	 * Return the 'episode' Property value
	 *
	 * @return	string
	 */
	public static function pEpisode()
	{
		return self::getValue(self::$episode);
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
	 * Return the 'gamePlatform' Property value
	 *
	 * @return	string
	 */
	public static function pGamePlatform()
	{
		return self::getValue(self::$gamePlatform);
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
	 * Return the 'numberOfEpisodes' Property value
	 *
	 * @return	string
	 */
	public static function pNumberOfEpisodes()
	{
		return self::getValue(self::$numberOfEpisodes);
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
	 * Return the 'numberOfSeasons' Property value
	 *
	 * @return	string
	 */
	public static function pNumberOfSeasons()
	{
		return self::getValue(self::$numberOfSeasons);
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
	 * Return the 'productionCompany' Property value
	 *
	 * @return	string
	 */
	public static function pProductionCompany()
	{
		return self::getValue(self::$productionCompany);
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

	/**
	 * Return the 'season' Property value
	 *
	 * @return	string
	 */
	public static function pSeason()
	{
		return self::getValue(self::$season);
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
