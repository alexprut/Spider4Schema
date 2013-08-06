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
 * An audio file.
 *
 * @package     Joomla.Platform
 * @subpackage  Microdata
 *
 * @see         http://schema.org/AudioObject
 * @since       13.1
*/
abstract class TypeAudioObject extends TypeMediaObject
{
	/**
	 * The Schema.org Type Scope
	 *
	 * @var string
	 */
	protected static $scope = 'https://schema.org/AudioObject';

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
	 * Return the 'transcript' Property value
	 *
	 * @return	string
	 */
	public static function pTranscript()
	{
		return self::getValue(self::$transcript);
	}
}
