<?php
/**
 * A collection of music tracks.
 *
 * @see    http://schema.org/MusicAlbum
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
	 * Classification of the album by it's type of content: soundtrack, live album, studio album, etc.
	 * Expected Type: MusicAlbumProductionType
	 * 
	 * @var	array
	 */
	protected static $albumProductionType = array('value' => 'albumProductionType',
		'expectedTypes' => array('MusicAlbumProductionType')
	);

	/**
	 * A release of this album. Inverse property: releaseOf.
	 * Expected Type: MusicRelease
	 * 
	 * @var	array
	 */
	protected static $albumRelease = array('value' => 'albumRelease',
		'expectedTypes' => array('MusicRelease')
	);

	/**
	 * The kind of release which this album is: single, EP or album.
	 * Expected Type: MusicAlbumReleaseType
	 * 
	 * @var	array
	 */
	protected static $albumReleaseType = array('value' => 'albumReleaseType',
		'expectedTypes' => array('MusicAlbumReleaseType')
	);

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
	 * Return the 'albumProductionType' Property value
	 *
	 * @return	string
	 */
	public static function pAlbumProductionType()
	{
		return self::getValue(self::$albumProductionType);
	}

	/**
	 * Return the 'albumRelease' Property value
	 *
	 * @return	string
	 */
	public static function pAlbumRelease()
	{
		return self::getValue(self::$albumRelease);
	}

	/**
	 * Return the 'albumReleaseType' Property value
	 *
	 * @return	string
	 */
	public static function pAlbumReleaseType()
	{
		return self::getValue(self::$albumReleaseType);
	}

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
