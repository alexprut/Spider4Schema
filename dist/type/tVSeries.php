<?php
/**
 * Series dedicated to TV broadcast and associated online delivery.
 *
 * @see    http://schema.org/TVSeries
*/
abstract class TypeTVSeries extends TypeCreativeWork
{
	/**
	 * The Schema.org Type Scope
	 *
	 * @var string
	 */
	protected static $scope = 'https://schema.org/TVSeries';

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
	 * The composer of the soundtrack.
	 * Expected Type: MusicGroup, Person
	 * 
	 * @var	array
	 */
	protected static $musicBy = array('value' => 'musicBy',
		'expectedTypes' => array('MusicGroup', 'Person')
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
	 * The number of seasons in this series.
	 * Expected Type: Number
	 * 
	 * @var	array
	 */
	protected static $numberOfSeasons = array('value' => 'numberOfSeasons',
		'expectedTypes' => array('Number')
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
	 * Return the 'numberOfSeasons' Property value
	 *
	 * @return	string
	 */
	public static function pNumberOfSeasons()
	{
		return self::getValue(self::$numberOfSeasons);
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
