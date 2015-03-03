<?php
/**
 * Classification of the album by it's type of content: soundtrack, live album, studio album, etc.
 *
 * @see    http://schema.org/MusicAlbumProductionType
*/
abstract class TypeMusicAlbumProductionType extends TypeEnumeration
{
	/**
	 * The Schema.org Type Scope
	 *
	 * @var string
	 */
	protected static $scope = 'https://schema.org/MusicAlbumProductionType';
}
