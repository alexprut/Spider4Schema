<?php
/**
 * Event type: Music event.
 *
 * @see    http://schema.org/MusicEvent
 * @since  1.0
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
