<?php
/**
 * A MusicRelease is a specific release of a music album.
 *
 * @see    http://schema.org/MusicRelease
*/
abstract class TypeMusicRelease extends TypeMusicPlaylist
{
	/**
	 * The Schema.org Type Scope
	 *
	 * @var string
	 */
	protected static $scope = 'https://schema.org/MusicRelease';

	/**
	 * The catalog number for the release.
	 * Expected Type: Text
	 * 
	 * @var	array
	 */
	protected static $catalogNumber = array('value' => 'catalogNumber',
		'expectedTypes' => array('Text')
	);

	/**
	 * The group the release is credited to if different than the byArtist. For example, Red and Blue is credited to "Stefani Germanotta Band", but by Lady Gaga.
	 * Expected Type: Person, Organization
	 * 
	 * @var	array
	 */
	protected static $creditedTo = array('value' => 'creditedTo',
		'expectedTypes' => array('Person', 'Organization')
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
	 * Format of this release (the type of recording media used, ie. compact disc, digital media, LP, etc.).
	 * Expected Type: MusicReleaseFormatType
	 * 
	 * @var	array
	 */
	protected static $musicReleaseFormat = array('value' => 'musicReleaseFormat',
		'expectedTypes' => array('MusicReleaseFormatType')
	);

	/**
	 * The label that issued the release.
	 * Expected Type: Organization
	 * 
	 * @var	array
	 */
	protected static $recordLabel = array('value' => 'recordLabel',
		'expectedTypes' => array('Organization')
	);

	/**
	 * The album this is a release of. Inverse property: albumRelease.
	 * Expected Type: MusicAlbum
	 * 
	 * @var	array
	 */
	protected static $releaseOf = array('value' => 'releaseOf',
		'expectedTypes' => array('MusicAlbum')
	);

	/**
	 * Return the 'catalogNumber' Property value
	 *
	 * @return	string
	 */
	public static function pCatalogNumber()
	{
		return self::getValue(self::$catalogNumber);
	}

	/**
	 * Return the 'creditedTo' Property value
	 *
	 * @return	string
	 */
	public static function pCreditedTo()
	{
		return self::getValue(self::$creditedTo);
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
	 * Return the 'musicReleaseFormat' Property value
	 *
	 * @return	string
	 */
	public static function pMusicReleaseFormat()
	{
		return self::getValue(self::$musicReleaseFormat);
	}

	/**
	 * Return the 'recordLabel' Property value
	 *
	 * @return	string
	 */
	public static function pRecordLabel()
	{
		return self::getValue(self::$recordLabel);
	}

	/**
	 * Return the 'releaseOf' Property value
	 *
	 * @return	string
	 */
	public static function pReleaseOf()
	{
		return self::getValue(self::$releaseOf);
	}
}
