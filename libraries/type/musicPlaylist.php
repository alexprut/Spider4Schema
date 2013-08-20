<?php
/**
 * A collection of music tracks in playlist form.
 *
 * @see    http://schema.org/MusicPlaylist
 * @since  1.0
*/
abstract class TypeMusicPlaylist extends TypeCreativeWork
{
	/**
	 * The Schema.org Type Scope
	 *
	 * @var string
	 */
	protected static $scope = 'https://schema.org/MusicPlaylist';

	/**
	 * The number of tracks in this album or playlist.
	 * Expected Type: Integer
	 * 
	 * @var	array
	 */
	protected static $numTracks = array('value' => 'numTracks',
		'expectedTypes' => array('Integer')
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
	 * Return the 'numTracks' Property value
	 *
	 * @return	string
	 */
	public static function pNumTracks()
	{
		return self::getValue(self::$numTracks);
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
