<?php
/**
 * Format of this release (the type of recording media used, ie. compact disc, digital media, LP, etc.).
 *
 * @see    http://schema.org/MusicReleaseFormatType
*/
abstract class TypeMusicReleaseFormatType extends TypeEnumeration
{
	/**
	 * The Schema.org Type Scope
	 *
	 * @var string
	 */
	protected static $scope = 'https://schema.org/MusicReleaseFormatType';
}
