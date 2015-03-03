<?php
/**
 * A video file.
 *
 * @see    http://schema.org/VideoObject
*/
abstract class TypeVideoObject extends TypeMediaObject
{
	/**
	 * The Schema.org Type Scope
	 *
	 * @var string
	 */
	protected static $scope = 'https://schema.org/VideoObject';

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
	 * The caption for this object.
	 * Expected Type: Text
	 * 
	 * @var	array
	 */
	protected static $caption = array('value' => 'caption',
		'expectedTypes' => array('Text')
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
	 * Expected Type: Person, MusicGroup
	 * 
	 * @var	array
	 */
	protected static $musicBy = array('value' => 'musicBy',
		'expectedTypes' => array('Person', 'MusicGroup')
	);

	/**
	 * Thumbnail image for an image or video.
	 * Expected Type: ImageObject
	 * 
	 * @var	array
	 */
	protected static $thumbnail = array('value' => 'thumbnail',
		'expectedTypes' => array('ImageObject')
	);

	/**
	 * If this MediaObject is an AudioObject or VideoObject, the transcript of that object.
	 * Expected Type: Text
	 * 
	 * @var	array
	 */
	protected static $transcript = array('value' => 'transcript',
		'expectedTypes' => array('Text')
	);

	/**
	 * The frame size of the video.
	 * Expected Type: Text
	 * 
	 * @var	array
	 */
	protected static $videoFrameSize = array('value' => 'videoFrameSize',
		'expectedTypes' => array('Text')
	);

	/**
	 * The quality of the video.
	 * Expected Type: Text
	 * 
	 * @var	array
	 */
	protected static $videoQuality = array('value' => 'videoQuality',
		'expectedTypes' => array('Text')
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
	 * Return the 'caption' Property value
	 *
	 * @return	string
	 */
	public static function pCaption()
	{
		return self::getValue(self::$caption);
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
	 * Return the 'thumbnail' Property value
	 *
	 * @return	string
	 */
	public static function pThumbnail()
	{
		return self::getValue(self::$thumbnail);
	}

	/**
	 * Return the 'transcript' Property value
	 *
	 * @return	string
	 */
	public static function pTranscript()
	{
		return self::getValue(self::$transcript);
	}

	/**
	 * Return the 'videoFrameSize' Property value
	 *
	 * @return	string
	 */
	public static function pVideoFrameSize()
	{
		return self::getValue(self::$videoFrameSize);
	}

	/**
	 * Return the 'videoQuality' Property value
	 *
	 * @return	string
	 */
	public static function pVideoQuality()
	{
		return self::getValue(self::$videoQuality);
	}
}
