<?php
/**
 * Season dedicated to TV broadcast and associated online delivery.
 *
 * @see    http://schema.org/TVSeason
*/
abstract class TypeTVSeason extends TypeCreativeWork
{
	/**
	 * The Schema.org Type Scope
	 *
	 * @var string
	 */
	protected static $scope = 'https://schema.org/TVSeason';

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
