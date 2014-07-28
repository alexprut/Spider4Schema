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
	 * A music album. Supercedes albums.
	 * Expected Type: MusicAlbum
	 * 
	 * @var	array
	 */
	protected static $album = array('value' => 'album',
		'expectedTypes' => array('MusicAlbum')
	);

	/**
	 * A music recording (track)—usually a single song. Supercedes tracks.
	 * Expected Type: MusicRecording
	 * 
	 * @var	array
	 */
	protected static $track = array('value' => 'track',
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
	 * Return the 'track' Property value
	 *
	 * @return	string
	 */
	public static function pTrack()
	{
		return self::getValue(self::$track);
	}
}
