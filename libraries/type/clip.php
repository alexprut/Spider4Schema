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
	 * Position of the clip within an ordered group of clips.
	 * Expected Type: Integer
	 * 
	 * @var	array
	 */
	protected static $clipNumber = array('value' => 'clipNumber',
		'expectedTypes' => array('Integer')
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
	 * A publication event associated with the episode, clip or media object.
	 * Expected Type: PublicationEvent
	 * 
	 * @var	array
	 */
	protected static $publication = array('value' => 'publication',
		'expectedTypes' => array('PublicationEvent')
	);

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
	 * Return the 'position' Property value
	 *
	 * @return	string
	 */
	public static function pPosition()
	{
		return self::getValue(self::$position);
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
