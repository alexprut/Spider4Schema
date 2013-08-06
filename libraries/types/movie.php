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
 * A movie.
 *
 * @package     Joomla.Platform
 * @subpackage  Microdata
 *
 * @see         http://schema.org/Movie
 * @since       13.1
*/
abstract class TypeMovie extends TypeCreativeWork
{
	/**
	 * The Schema.org Type Scope
	 *
	 * @var string
	 */
	protected static $scope = 'https://schema.org/Movie';

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
	 * The duration of the item (movie, audio recording, event, etc.) in ISO 8601 date format.
	 * Expected Type: Duration
	 * 
	 * @var	array
	 */
	protected static $duration = array('value' => 'duration',
		'expectedTypes' => array('Duration')
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
	 * Return the 'duration' Property value
	 *
	 * @return	string
	 */
	public static function pDuration()
	{
		return self::getValue(self::$duration);
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
