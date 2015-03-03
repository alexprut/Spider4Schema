<?php
/**
 * A media episode (e.g. TV, radio, video game) which can be part of a series or season.
 *
 * @see    http://schema.org/Episode
*/
abstract class TypeEpisode extends TypeCreativeWork
{
	/**
	 * The Schema.org Type Scope
	 *
	 * @var string
	 */
	protected static $scope = 'https://schema.org/Episode';

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
	 * Position of the episode within an ordered group of episodes.
	 * Expected Type: Text, Integer
	 * 
	 * @var	array
	 */
	protected static $episodeNumber = array('value' => 'episodeNumber',
		'expectedTypes' => array('Text', 'Integer')
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
	 * The season to which this episode belongs.
	 * Expected Type: Season
	 * 
	 * @var	array
	 */
	protected static $partOfSeason = array('value' => 'partOfSeason',
		'expectedTypes' => array('Season')
	);

	/**
	 * The series to which this episode or season belongs. Supersedes partOfTVSeries.
	 * Expected Type: Series
	 * 
	 * @var	array
	 */
	protected static $partOfSeries = array('value' => 'partOfSeries',
		'expectedTypes' => array('Series')
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
	 * A publication event associated with the episode, clip or media object.
	 * Expected Type: PublicationEvent
	 * 
	 * @var	array
	 */
	protected static $publication = array('value' => 'publication',
		'expectedTypes' => array('PublicationEvent')
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
	 * Return the 'episodeNumber' Property value
	 *
	 * @return	string
	 */
	public static function pEpisodeNumber()
	{
		return self::getValue(self::$episodeNumber);
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
	 * Return the 'partOfSeason' Property value
	 *
	 * @return	string
	 */
	public static function pPartOfSeason()
	{
		return self::getValue(self::$partOfSeason);
	}

	/**
	 * Return the 'partOfSeries' Property value
	 *
	 * @return	string
	 */
	public static function pPartOfSeries()
	{
		return self::getValue(self::$partOfSeries);
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
	 * Return the 'publication' Property value
	 *
	 * @return	string
	 */
	public static function pPublication()
	{
		return self::getValue(self::$publication);
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
