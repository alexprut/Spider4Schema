<?php
/**
 * A musical group, such as a band, an orchestra, or a choir. Can also be a solo musician.
 *
 * @see    http://schema.org/MusicGroup
*/
abstract class TypeMusicGroup extends TypePerformingGroup
{
	/**
	 * The Schema.org Type Scope
	 *
	 * @var string
	 */
	protected static $scope = 'https://schema.org/MusicGroup';

	/**
	 * A music album.
	 * Expected Type: MusicAlbum
	 * 
	 * @var	array
	 */
	protected static $album = array('value' => 'album',
		'expectedTypes' => array('MusicAlbum')
	);

	/**
	 * A collection of music albums (legacy spelling; see singular form, album).
	 * Expected Type: MusicAlbum
	 * 
	 * @var	array
	 */
	protected static $albums = array('value' => 'albums',
		'expectedTypes' => array('MusicAlbum')
	);

	/**
	 * A member of the music group—for example, John, Paul, George, or Ringo.
	 * Expected Type: Person
	 * 
	 * @var	array
	 */
	protected static $musicGroupMember = array('value' => 'musicGroupMember',
		'expectedTypes' => array('Person')
	);

	/**
	 * A music recording (track)—usually a single song.
	 * Expected Type: MusicRecording
	 * 
	 * @var	array
	 */
	protected static $track = array('value' => 'track',
		'expectedTypes' => array('MusicRecording')
	);

	/**
	 * A music recording (track)—usually a single song (legacy spelling; see singular form, track).
	 * Expected Type: MusicRecording
	 * 
	 * @var	array
	 */
	protected static $tracks = array('value' => 'tracks',
		'expectedTypes' => array('MusicRecording')
	);

	/**
	 * Return the 'album' Property value
	 *
	 * @return	string
	 */
	public static function pAlbum()
	{
		return self::getValue(self::$album);
	}

	/**
	 * Return the 'albums' Property value
	 *
	 * @return	string
	 */
	public static function pAlbums()
	{
		return self::getValue(self::$albums);
	}

	/**
	 * Return the 'musicGroupMember' Property value
	 *
	 * @return	string
	 */
	public static function pMusicGroupMember()
	{
		return self::getValue(self::$musicGroupMember);
	}

	/**
	 * Return the 'track' Property value
	 *
	 * @return	string
	 */
	public static function pTrack()
	{
		return self::getValue(self::$track);
	}

	/**
	 * Return the 'tracks' Property value
	 *
	 * @return	string
	 */
	public static function pTracks()
	{
		return self::getValue(self::$tracks);
	}
}
