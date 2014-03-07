<?php
/**
 * A short TV progam or a segment/part of a TV program.
 *
 * @see    http://schema.org/TVClip
*/
abstract class TypeTVClip extends TypeClip
{
	/**
	 * The Schema.org Type Scope
	 *
	 * @var string
	 */
	protected static $scope = 'https://schema.org/TVClip';

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
