<?php
/**
 * A TV or radio season.
 *
 * @see    http://schema.org/Season
*/
abstract class TypeSeason extends TypeCreativeWork
{
	/**
	 * The Schema.org Type Scope
	 *
	 * @var string
	 */
	protected static $scope = 'https://schema.org/Season';

	/**
	 * The end date and time of the event or item (in ISO 8601 date format).
	 * Expected Type: Date
	 * 
	 * @var	array
	 */
	protected static $endDate = array('value' => 'endDate',
		'expectedTypes' => array('Date')
	);

	/**
	 * An episode of a TV/radio series or season
	 * Expected Type: Episode
	 * 
	 * @var	array
	 */
	protected static $episode = array('value' => 'episode',
		'expectedTypes' => array('Episode')
	);

	/**
	 * An episode of a TV/radio series or season (legacy spelling; see singular form, episode)
	 * Expected Type: Episode
	 * 
	 * @var	array
	 */
	protected static $episodes = array('value' => 'episodes',
		'expectedTypes' => array('Episode')
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
	 * Position of the season within an ordered group of seasons.
	 * Expected Type: Integer
	 * 
	 * @var	array
	 */
	protected static $seasonNumber = array('value' => 'seasonNumber',
		'expectedTypes' => array('Integer')
	);

	/**
	 * The start date and time of the event or item (in ISO 8601 date format).
	 * Expected Type: Date
	 * 
	 * @var	array
	 */
	protected static $startDate = array('value' => 'startDate',
		'expectedTypes' => array('Date')
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
	 * Return the 'endDate' Property value
	 *
	 * @return	string
	 */
	public static function pEndDate()
	{
		return self::getValue(self::$endDate);
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
	 * Return the 'episodes' Property value
	 *
	 * @return	string
	 */
	public static function pEpisodes()
	{
		return self::getValue(self::$episodes);
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
	 * Return the 'seasonNumber' Property value
	 *
	 * @return	string
	 */
	public static function pSeasonNumber()
	{
		return self::getValue(self::$seasonNumber);
	}

	/**
	 * Return the 'startDate' Property value
	 *
	 * @return	string
	 */
	public static function pStartDate()
	{
		return self::getValue(self::$startDate);
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
