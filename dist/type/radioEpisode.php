<?php
/**
 * A radio episode which can be part of a series or season.
 *
 * @see    http://schema.org/RadioEpisode
*/
abstract class TypeRadioEpisode extends TypeEpisode
{
	/**
	 * The Schema.org Type Scope
	 *
	 * @var string
	 */
	protected static $scope = 'https://schema.org/RadioEpisode';
}
