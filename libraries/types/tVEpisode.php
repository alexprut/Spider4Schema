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
 * An episode of a TV series or season.
 *
 * @package     Joomla.Platform
 * @subpackage  Microdata
 *
 * @see         http://schema.org/TVEpisode
 * @since       13.1
*/
abstract class TypeTVEpisode extends TypeCreativeWork
{
	/**
	 * The Schema.org Type Scope
	 *
	 * @var string
	 */
	protected static $scope = 'https://schema.org/TVEpisode';

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
	 * The episode number.
	 * Expected Type: Number
	 * 
	 * @var	array
	 */
	protected static $episodeNumber = array('value' => 'episodeNumber',
		'expectedTypes' => array('Number')
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
	 * The season to which this episode belongs.
	 * Expected Type: TVSeason
	 * 
	 * @var	array
	 */
	protected static $partOfSeason = array('value' => 'partOfSeason',
		'expectedTypes' => array('TVSeason')
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
	 * Return the 'partOfTVSeries' Property value
	 *
	 * @return	string
	 */
	public static function pPartOfTVSeries()
	{
		return self::getValue(self::$partOfTVSeries);
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
	 * Return the 'trailer' Property value
	 *
	 * @return	string
	 */
	public static function pTrailer()
	{
		return self::getValue(self::$trailer);
	}
}
