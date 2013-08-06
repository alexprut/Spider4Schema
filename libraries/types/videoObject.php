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
 * A video file.
 *
 * @package     Joomla.Platform
 * @subpackage  Microdata
 *
 * @see         http://schema.org/VideoObject
 * @since       13.1
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
	 * The caption for this object.
	 * Expected Type: Text
	 * 
	 * @var	array
	 */
	protected static $caption = array('value' => 'caption',
		'expectedTypes' => array('Text')
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
	 * Return the 'caption' Property value
	 *
	 * @return	string
	 */
	public static function pCaption()
	{
		return self::getValue(self::$caption);
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
