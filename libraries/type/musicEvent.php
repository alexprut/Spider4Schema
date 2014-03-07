<?php
/**
 * Event type: Music event.
 *
 * @see    http://schema.org/MusicEvent
*/
abstract class TypeMusicEvent extends TypeEvent
{
	/**
	 * The Schema.org Type Scope
	 *
	 * @var string
	 */
	protected static $scope = 'https://schema.org/MusicEvent';
}
