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
 * A collection of music tracks.
 *
 * @package     Joomla.Platform
 * @subpackage  Microdata
 *
 * @see         http://schema.org/MusicAlbum
 * @since       13.1
*/
abstract class TypeMusicAlbum extends TypeMusicPlaylist
{
	/**
	 * The Schema.org Type Scope
	 *
	 * @var string
	 */
	protected static $scope = 'https://schema.org/MusicAlbum';

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
	 * Return the 'byArtist' Property value
	 *
	 * @return	string
	 */
	public static function pByArtist()
	{
		return self::getValue(self::$byArtist);
	}
}
