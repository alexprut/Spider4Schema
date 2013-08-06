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
 * A TV season.
 *
 * @package     Joomla.Platform
 * @subpackage  Microdata
 *
 * @see         http://schema.org/TVSeason
 * @since       13.1
*/
abstract class TypeTVSeason extends TypeCreativeWork
{
	/**
	 * The Schema.org Type Scope
	 *
	 * @var string
	 */
	protected static $scope = 'https://schema.org/TVSeason';

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
	 * The number of episodes in this season or series.
	 * Expected Type: Number
	 * 
	 * @var	array
	 */
	protected static $numberOfEpisodes = array('value' => 'numberOfEpisodes',
		'expectedTypes' => array('Number')
	);

	/**
	 * The TV series to which this episode or season belongs.
	 * Expected Type: TVSeries
	 * 
	 * @var	array
	 */
	protected static $partOfTVSeries = array('value' => 'partOfTVSeries',
		'expectedTypes' => array('TVSeries')
	);

	/**
	 * The season number.
	 * Expected Type: Integer
	 * 
	 * @var	array
	 */
	protected static $seasonNumber = array('value' => 'seasonNumber',
		'expectedTypes' => array('Integer')
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
	 * Return the 'partOfTVSeries' Property value
	 *
	 * @return	string
	 */
	public static function pPartOfTVSeries()
	{
		return self::getValue(self::$partOfTVSeries);
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
