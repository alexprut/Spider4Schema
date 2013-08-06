<?php
/**
 * @package     Joomla.Platform
 * @subpackage  Microdata
 *
 * @copyright   Copyright (C) 2005 - 2013 Open Source Matters, Inc. All rights reserved.
 * @license     GNU General Public License version 2 or later; see LICENSE
 */

defined("JPATH_PLATFORM") or die;

/**
 * A television series.
 *
 * @package     Joomla.Platform
 * @subpackage  Microdata
 *
 * @see         http://schema.org/TVSeries
 * @since       13.1
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
	 * A cast member of the movie, TV series, season, or episode, or video.
	 * Expected Type: Person
	 * 
	 * @var	array
	 */
	protected static $actor = array('value' => 'actor',
		'expectedTypes' => array('Person')
	);

	/**
	 * A cast member of the movie, TV series, season, or episode, or video. (legacy spelling; see singular form, actor)
	 * Expected Type: Person
	 * 
	 * @var	array
	 */
	protected static $actors = array('value' => 'actors',
		'expectedTypes' => array('Person')
	);

	/**
	 * The director of the movie, TV episode, or series.
	 * Expected Type: Person
	 * 
	 * @var	array
	 */
	protected static $director = array('value' => 'director',
		'expectedTypes' => array('Person')
	);

	/**
	 * The end date and time of the event (in ISO 8601 date format).
	 * Expected Type: Date
	 * 
	 * @var	array
	 */
	protected static $endDate = array('value' => 'endDate',
		'expectedTypes' => array('Date')
	);

	/**
	 * An episode of a TV series or season.
	 * Expected Type: TVEpisode
	 * 
	 * @var	array
	 */
	protected static $episode = array('value' => 'episode',
		'expectedTypes' => array('TVEpisode')
	);

	/**
	 * The episode of a TV series or season (legacy spelling; see singular form, episode).
	 * Expected Type: TVEpisode
	 * 
	 * @var	array
	 */
	protected static $episodes = array('value' => 'episodes',
		'expectedTypes' => array('TVEpisode')
	);

	/**
	 * The composer of the movie or TV soundtrack.
	 * Expected Type: MusicGroup', 'Person
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
	 * The producer of the movie, TV series, season, or episode, or video.
	 * Expected Type: Person
	 * 
	 * @var	array
	 */
	protected static $producer = array('value' => 'producer',
		'expectedTypes' => array('Person')
	);

	/**
	 * The production company or studio that made the movie, TV series, season, or episode, or video.
	 * Expected Type: Organization
	 * 
	 * @var	array
	 */
	protected static $productionCompany = array('value' => 'productionCompany',
		'expectedTypes' => array('Organization')
	);

	/**
	 * A season of a TV series.
	 * Expected Type: TVSeason
	 * 
	 * @var	array
	 */
	protected static $season = array('value' => 'season',
		'expectedTypes' => array('TVSeason')
	);

	/**
	 * The seasons of the TV series (legacy spelling; see singular form, season).
	 * Expected Type: TVSeason
	 * 
	 * @var	array
	 */
	protected static $seasons = array('value' => 'seasons',
		'expectedTypes' => array('TVSeason')
	);

	/**
	 * The start date and time of the event (in ISO 8601 date format).
	 * Expected Type: Date
	 * 
	 * @var	array
	 */
	protected static $startDate = array('value' => 'startDate',
		'expectedTypes' => array('Date')
	);

	/**
	 * The trailer of the movie or TV series, season, or episode.
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
	 * Return the 'season' Property value
	 *
	 * @return	string
	 */
	public static function pSeason()
	{
		return self::getValue(self::$season);
	}

	/**
	 * Return the 'seasons' Property value
	 *
	 * @return	string
	 */
	public static function pSeasons()
	{
		return self::getValue(self::$seasons);
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
