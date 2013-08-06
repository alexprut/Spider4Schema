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
 * A music recording (track), usually a single song.
 *
 * @package     Joomla.Platform
 * @subpackage  Microdata
 *
 * @see         http://schema.org/MusicRecording
 * @since       13.1
*/
abstract class TypeMusicRecording extends TypeCreativeWork
{
	/**
	 * The Schema.org Type Scope
	 *
	 * @var string
	 */
	protected static $scope = 'https://schema.org/MusicRecording';

	/**
	 * The artist that performed this album or recording.
	 * Expected Type: MusicGroup
	 * 
	 * @var	array
	 */
	protected static $byArtist = array('value' => 'byArtist',
		'expectedTypes' => array('MusicGroup')
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
	 * The album to which this recording belongs.
	 * Expected Type: MusicAlbum
	 * 
	 * @var	array
	 */
	protected static $inAlbum = array('value' => 'inAlbum',
		'expectedTypes' => array('MusicAlbum')
	);

	/**
	 * The playlist to which this recording belongs.
	 * Expected Type: MusicPlaylist
	 * 
	 * @var	array
	 */
	protected static $inPlaylist = array('value' => 'inPlaylist',
		'expectedTypes' => array('MusicPlaylist')
	);

	/**
	 * Return the 'byArtist' Property value
	 *
	 * @return	string
	 */
	public static function pByArtist()
	{
		return self::getValue(self::$byArtist);
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
	 * Return the 'inAlbum' Property value
	 *
	 * @return	string
	 */
	public static function pInAlbum()
	{
		return self::getValue(self::$inAlbum);
	}

	/**
	 * Return the 'inPlaylist' Property value
	 *
	 * @return	string
	 */
	public static function pInPlaylist()
	{
		return self::getValue(self::$inPlaylist);
	}
}
