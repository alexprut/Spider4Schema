<?php
/**
 * A music recording (track), usually a single song.
 *
 * @see    http://schema.org/MusicRecording
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
	 * The International Standard Recording Code for the recording.
	 * Expected Type: Text
	 * 
	 * @var	array
	 */
	protected static $isrcCode = array('value' => 'isrcCode',
		'expectedTypes' => array('Text')
	);

	/**
	 * The composition this track is a recording of. Inverse property: recordedAs.
	 * Expected Type: MusicComposition
	 * 
	 * @var	array
	 */
	protected static $recordingOf = array('value' => 'recordingOf',
		'expectedTypes' => array('MusicComposition')
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

	/**
	 * Return the 'isrcCode' Property value
	 *
	 * @return	string
	 */
	public static function pIsrcCode()
	{
		return self::getValue(self::$isrcCode);
	}

	/**
	 * Return the 'recordingOf' Property value
	 *
	 * @return	string
	 */
	public static function pRecordingOf()
	{
		return self::getValue(self::$recordingOf);
	}
}
