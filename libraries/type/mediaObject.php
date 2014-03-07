<?php
/**
 * An image, video, or audio object embedded in a web page. Note that a creative work may have many media objects associated with it on the same web page. For example, a page about a single song (MusicRecording) may have a music video (VideoObject), and a high and low bandwidth audio stream (2 AudioObject's).
 *
 * @see    http://schema.org/MediaObject
*/
abstract class TypeMediaObject extends TypeCreativeWork
{
	/**
	 * The Schema.org Type Scope
	 *
	 * @var string
	 */
	protected static $scope = 'https://schema.org/MediaObject';

	/**
	 * A NewsArticle associated with the Media Object.
	 * Expected Type: NewsArticle
	 * 
	 * @var	array
	 */
	protected static $associatedArticle = array('value' => 'associatedArticle',
		'expectedTypes' => array('NewsArticle')
	);

	/**
	 * The bitrate of the media object.
	 * Expected Type: Text
	 * 
	 * @var	array
	 */
	protected static $bitrate = array('value' => 'bitrate',
		'expectedTypes' => array('Text')
	);

	/**
	 * File size in (mega/kilo) bytes.
	 * Expected Type: Text
	 * 
	 * @var	array
	 */
	protected static $contentSize = array('value' => 'contentSize',
		'expectedTypes' => array('Text')
	);

	/**
	 * Actual bytes of the media object, for example the image file or video file. (previous spelling: contentURL)
	 * Expected Type: URL
	 * 
	 * @var	array
	 */
	protected static $contentUrl = array('value' => 'contentUrl',
		'expectedTypes' => array('URL')
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
	 * A URL pointing to a player for a specific video. In general, this is the information in the src element of an embed tag and should not be the same as the content of the loc tag. (previous spelling: embedURL)
	 * Expected Type: URL
	 * 
	 * @var	array
	 */
	protected static $embedUrl = array('value' => 'embedUrl',
		'expectedTypes' => array('URL')
	);

	/**
	 * The creative work encoded by this media object
	 * Expected Type: CreativeWork
	 * 
	 * @var	array
	 */
	protected static $encodesCreativeWork = array('value' => 'encodesCreativeWork',
		'expectedTypes' => array('CreativeWork')
	);

	/**
	 * mp3, mpeg4, etc.
	 * Expected Type: Text
	 * 
	 * @var	array
	 */
	protected static $encodingFormat = array('value' => 'encodingFormat',
		'expectedTypes' => array('Text')
	);

	/**
	 * Date the content expires and is no longer useful or available. Useful for videos.
	 * Expected Type: Date
	 * 
	 * @var	array
	 */
	protected static $expires = array('value' => 'expires',
		'expectedTypes' => array('Date')
	);

	/**
	 * The height of the item.
	 * Expected Type: Distance, QuantitativeValue
	 * 
	 * @var	array
	 */
	protected static $height = array('value' => 'height',
		'expectedTypes' => array('Distance', 'QuantitativeValue')
	);

	/**
	 * Player type required—for example, Flash or Silverlight.
	 * Expected Type: Text
	 * 
	 * @var	array
	 */
	protected static $playerType = array('value' => 'playerType',
		'expectedTypes' => array('Text')
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
	 * The regions where the media is allowed. If not specified, then it's assumed to be allowed everywhere. Specify the countries in ISO 3166 format.
	 * Expected Type: Place
	 * 
	 * @var	array
	 */
	protected static $regionsAllowed = array('value' => 'regionsAllowed',
		'expectedTypes' => array('Place')
	);

	/**
	 * Indicates if use of the media require a subscription  (either paid or free). Allowed values are true or false (note that an earlier version had 'yes', 'no').
	 * Expected Type: Boolean
	 * 
	 * @var	array
	 */
	protected static $requiresSubscription = array('value' => 'requiresSubscription',
		'expectedTypes' => array('Boolean')
	);

	/**
	 * Date when this media object was uploaded to this site.
	 * Expected Type: Date
	 * 
	 * @var	array
	 */
	protected static $uploadDate = array('value' => 'uploadDate',
		'expectedTypes' => array('Date')
	);

	/**
	 * The width of the item.
	 * Expected Type: Distance, QuantitativeValue
	 * 
	 * @var	array
	 */
	protected static $width = array('value' => 'width',
		'expectedTypes' => array('Distance', 'QuantitativeValue')
	);

	/**
	 * Return the 'associatedArticle' Property value
	 *
	 * @return	string
	 */
	public static function pAssociatedArticle()
	{
		return self::getValue(self::$associatedArticle);
	}

	/**
	 * Return the 'bitrate' Property value
	 *
	 * @return	string
	 */
	public static function pBitrate()
	{
		return self::getValue(self::$bitrate);
	}

	/**
	 * Return the 'contentSize' Property value
	 *
	 * @return	string
	 */
	public static function pContentSize()
	{
		return self::getValue(self::$contentSize);
	}

	/**
	 * Return the 'contentUrl' Property value
	 *
	 * @return	string
	 */
	public static function pContentUrl()
	{
		return self::getValue(self::$contentUrl);
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
	 * Return the 'embedUrl' Property value
	 *
	 * @return	string
	 */
	public static function pEmbedUrl()
	{
		return self::getValue(self::$embedUrl);
	}

	/**
	 * Return the 'encodesCreativeWork' Property value
	 *
	 * @return	string
	 */
	public static function pEncodesCreativeWork()
	{
		return self::getValue(self::$encodesCreativeWork);
	}

	/**
	 * Return the 'encodingFormat' Property value
	 *
	 * @return	string
	 */
	public static function pEncodingFormat()
	{
		return self::getValue(self::$encodingFormat);
	}

	/**
	 * Return the 'expires' Property value
	 *
	 * @return	string
	 */
	public static function pExpires()
	{
		return self::getValue(self::$expires);
	}

	/**
	 * Return the 'height' Property value
	 *
	 * @return	string
	 */
	public static function pHeight()
	{
		return self::getValue(self::$height);
	}

	/**
	 * Return the 'playerType' Property value
	 *
	 * @return	string
	 */
	public static function pPlayerType()
	{
		return self::getValue(self::$playerType);
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
	 * Return the 'regionsAllowed' Property value
	 *
	 * @return	string
	 */
	public static function pRegionsAllowed()
	{
		return self::getValue(self::$regionsAllowed);
	}

	/**
	 * Return the 'requiresSubscription' Property value
	 *
	 * @return	string
	 */
	public static function pRequiresSubscription()
	{
		return self::getValue(self::$requiresSubscription);
	}

	/**
	 * Return the 'uploadDate' Property value
	 *
	 * @return	string
	 */
	public static function pUploadDate()
	{
		return self::getValue(self::$uploadDate);
	}

	/**
	 * Return the 'width' Property value
	 *
	 * @return	string
	 */
	public static function pWidth()
	{
		return self::getValue(self::$width);
	}
}
