<?php
/**
 * A short radio program or a segment/part of a radio program.
 *
 * @see    http://schema.org/RadioClip
*/
abstract class TypeRadioClip extends TypeClip
{
	/**
	 * The Schema.org Type Scope
	 *
	 * @var string
	 */
	protected static $scope = 'https://schema.org/RadioClip';

	/**
	 * The season to which this episode belongs.
	 * Expected Type: Season
	 * 
	 * @var	array
	 */
	protected static $partOfSeason = array('value' => 'partOfSeason',
		'expectedTypes' => array('Season')
	);

	/**
	 * The series to which this episode or season belongs. Supercedes partOfTVSeries.
	 * Expected Type: Series
	 * 
	 * @var	array
	 */
	protected static $partOfSeries = array('value' => 'partOfSeries',
		'expectedTypes' => array('Series')
	);

	/**
	 * Return the 'partOfSeason' Property value
	 *
	 * @return	string
	 */
	public static function pPartOfSeason()
	{
		return self::getValue(self::$partOfSeason);
	}

	/**
	 * Return the 'partOfSeries' Property value
	 *
	 * @return	string
	 */
	public static function pPartOfSeries()
	{
		return self::getValue(self::$partOfSeries);
	}
}
