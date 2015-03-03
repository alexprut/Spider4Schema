<?php
/**
 * Indicates whether this game is multi-player, co-op or single-player.
 *
 * @see    http://schema.org/GamePlayMode
*/
abstract class TypeGamePlayMode extends TypeEnumeration
{
	/**
	 * The Schema.org Type Scope
	 *
	 * @var string
	 */
	protected static $scope = 'https://schema.org/GamePlayMode';
}
