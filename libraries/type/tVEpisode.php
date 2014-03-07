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

	/**
	 * The TV series to which this episode or season belongs. (legacy form; partOfSeries is preferred)
	 * Expected Type: TVSeries
	 * 
	 * @var	array
	 */
	protected static $partOfTVSeries = array('value' => 'partOfTVSeries',
		'expectedTypes' => array('TVSeries')
	);

	/**
	 * Return the 'partOfTVSeries' Property value
	 *
	 * @return	string
	 */
	public static function pPartOfTVSeries()
	{
		return self::getValue(self::$partOfTVSeries);
	}
}
