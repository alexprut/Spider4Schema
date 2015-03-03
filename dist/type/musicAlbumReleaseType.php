<?php
/**
 * The kind of release which this album is: single, EP or album.
 *
 * @see    http://schema.org/MusicAlbumReleaseType
*/
abstract class TypeMusicAlbumReleaseType extends TypeEnumeration
{
	/**
	 * The Schema.org Type Scope
	 *
	 * @var string
	 */
	protected static $scope = 'https://schema.org/MusicAlbumReleaseType';
}
