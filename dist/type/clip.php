<?php
/**
 * A short TV or radio program or a segment/part of a program.
 *
 * @see    http://schema.org/Clip
*/
abstract class TypeClip extends TypeCreativeWork
{
	/**
	 * The Schema.org Type Scope
	 *
	 * @var string
	 */
	protected static $scope = 'https://schema.org/Clip';

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
	 * Position of the clip within an ordered group of clips.
	 * Expected Type: Integer, Text
	 * 
	 * @var	array
	 */
	protected static $clipNumber = array('value' => 'clipNumber',
		'expectedTypes' => array('Integer', 'Text')
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
	 * The composer of the soundtrack.
	 * Expected Type: MusicGroup, Person
	 * 
	 * @var	array
	 */
	protected static $musicBy = array('value' => 'musicBy',
		'expectedTypes' => array('MusicGroup', 'Person')
	);

	/**
	 * The episode to which this clip belongs.
	 * Expected Type: Episode
	 * 
	 * @var	array
	 */
	protected static $partOfEpisode = array('value' => 'partOfEpisode',
		'expectedTypes' => array('Episode')
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
	 * A publication event associated with the episode, clip or media object.
	 * Expected Type: PublicationEvent
	 * 
	 * @var	array
	 */
	protected static $publication = array('value' => 'publication',
		'expectedTypes' => array('PublicationEvent')
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
	 * Return the 'clipNumber' Property value
	 *
	 * @return	string
	 */
	public static function pClipNumber()
	{
		return self::getValue(self::$clipNumber);
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
	 * Return the 'musicBy' Property value
	 *
	 * @return	string
	 */
	public static function pMusicBy()
	{
		return self::getValue(self::$musicBy);
	}

	/**
	 * Return the 'partOfEpisode' Property value
	 *
	 * @return	string
	 */
	public static function pPartOfEpisode()
	{
		return self::getValue(self::$partOfEpisode);
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
	 * Return the 'publication' Property value
	 *
	 * @return	string
	 */
	public static function pPublication()
	{
		return self::getValue(self::$publication);
	}
}
