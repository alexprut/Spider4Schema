<?php
/**
 * User interaction: Play count of an item, for example a video or a song.
 *
 * @see    http://schema.org/UserPlays
*/
abstract class TypeUserPlays extends TypeUserInteraction
{
	/**
	 * The Schema.org Type Scope
	 *
	 * @var string
	 */
	protected static $scope = 'https://schema.org/UserPlays';
}
