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
	 * A music album. Supersedes albums.
	 * Expected Type: MusicAlbum
	 * 
	 * @var	array
	 */
	protected static $album = array('value' => 'album',
		'expectedTypes' => array('MusicAlbum')
	);

	/**
	 * Genre of the creative work or group.
	 * Expected Type: Text
	 * 
	 * @var	array
	 */
	protected static $genre = array('value' => 'genre',
		'expectedTypes' => array('Text')
	);

	/**
	 * A music recording (track)—usually a single song. If an ItemList is given, the list should contain items of type MusicRecording. Supersedes tracks.
	 * Expected Type: ItemList, MusicRecording
	 * 
	 * @var	array
	 */
	protected static $track = array('value' => 'track',
		'expectedTypes' => array('ItemList', 'MusicRecording')
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
	 * Return the 'genre' Property value
	 *
	 * @return	string
	 */
	public static function pGenre()
	{
		return self::getValue(self::$genre);
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
