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
 * An image file.
 *
 * @package     Joomla.Platform
 * @subpackage  Microdata
 *
 * @see         http://schema.org/ImageObject
 * @since       13.1
*/
abstract class TypeImageObject extends TypeMediaObject
{
	/**
	 * The Schema.org Type Scope
	 *
	 * @var string
	 */
	protected static $scope = 'https://schema.org/ImageObject';

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
	 * exif data for this object.
	 * Expected Type: Text
	 * 
	 * @var	array
	 */
	protected static $exifData = array('value' => 'exifData',
		'expectedTypes' => array('Text')
	);

	/**
	 * Indicates whether this image is representative of the content of the page.
	 * Expected Type: Boolean
	 * 
	 * @var	array
	 */
	protected static $representativeOfPage = array('value' => 'representativeOfPage',
		'expectedTypes' => array('Boolean')
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
	 * Return the 'caption' Property value
	 *
	 * @return	string
	 */
	public static function pCaption()
	{
		return self::getValue(self::$caption);
	}

	/**
	 * Return the 'exifData' Property value
	 *
	 * @return	string
	 */
	public static function pExifData()
	{
		return self::getValue(self::$exifData);
	}

	/**
	 * Return the 'representativeOfPage' Property value
	 *
	 * @return	string
	 */
	public static function pRepresentativeOfPage()
	{
		return self::getValue(self::$representativeOfPage);
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
}
