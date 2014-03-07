<?php
/**
 * A TV or radio episode which can be part of a series or season.
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
	 * A cast member of the movie, tv/radio series, season, episode, or video.
	 * Expected Type: Person
	 * 
	 * @var	array
	 */
	protected static $actor = array('value' => 'actor',
		'expectedTypes' => array('Person')
	);

	/**
	 * A cast member of the movie, tv/radio series, season, episode, or video. (legacy spelling; see singular form, actor)
	 * Expected Type: Person
	 * 
	 * @var	array
	 */
	protected static $actors = array('value' => 'actors',
		'expectedTypes' => array('Person')
	);

	/**
	 * The director of the movie, tv/radio episode or series.
	 * Expected Type: Person
	 * 
	 * @var	array
	 */
	protected static $director = array('value' => 'director',
		'expectedTypes' => array('Person')
	);

	/**
	 * The director of the movie, tv/radio episode or series. (legacy spelling; see singular form, director)
	 * Expected Type: Person
	 * 
	 * @var	array
	 */
	protected static $directors = array('value' => 'directors',
		'expectedTypes' => array('Person')
	);

	/**
	 * Position of the episode within an ordered group of episodes.
	 * Expected Type: Integer
	 * 
	 * @var	array
	 */
	protected static $episodeNumber = array('value' => 'episodeNumber',
		'expectedTypes' => array('Integer')
	);

	/**
	 * The composer of the movie or TV/radio soundtrack.
	 * Expected Type: MusicGroup, Person
	 * 
	 * @var	array
	 */
	protected static $musicBy = array('value' => 'musicBy',
		'expectedTypes' => array('MusicGroup', 'Person')
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
	 * The series to which this episode or season belongs.
	 * Expected Type: Series
	 * 
	 * @var	array
	 */
	protected static $partOfSeries = array('value' => 'partOfSeries',
		'expectedTypes' => array('Series')
	);

	/**
	 * Free text to define other than pure numerical ranking of an episode or a season in an ordered list of items (further formatting restrictions may apply within particular user groups).
	 * Expected Type: Text
	 * 
	 * @var	array
	 */
	protected static $position = array('value' => 'position',
		'expectedTypes' => array('Text')
	);

	/**
	 * The producer of the movie, tv/radio series, season, or episode, or video.
	 * Expected Type: Person
	 * 
	 * @var	array
	 */
	protected static $producer = array('value' => 'producer',
		'expectedTypes' => array('Person')
	);

	/**
	 * The production company or studio that made the movie, tv/radio series, season, or episode, or media object.
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
	 * The trailer of a movie or tv/radio series, season, or episode.
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
	 * Return the 'actors' Property value
	 *
	 * @return	string
	 */
	public static function pActors()
	{
		return self::getValue(self::$actors);
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
	 * Return the 'directors' Property value
	 *
	 * @return	string
	 */
	public static function pDirectors()
	{
		return self::getValue(self::$directors);
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
	 * Return the 'position' Property value
	 *
	 * @return	string
	 */
	public static function pPosition()
	{
		return self::getValue(self::$position);
	}

	/**
	 * Return the 'producer' Property value
	 *
	 * @return	string
	 */
	public static function pProducer()
	{
		return self::getValue(self::$producer);
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
