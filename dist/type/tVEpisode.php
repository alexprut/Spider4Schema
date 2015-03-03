<?php
/**
 * A TV episode which can be part of a series or season.
 *
 * @see    http://schema.org/TVEpisode
*/
abstract class TypeTVEpisode extends TypeEpisode
{
	/**
	 * The Schema.org Type Scope
	 *
	 * @var string
	 */
	protected static $scope = 'https://schema.org/TVEpisode';
}
