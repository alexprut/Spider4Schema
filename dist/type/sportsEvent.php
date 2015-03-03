<?php
/**
 * Event type: Sports event.
 *
 * @see    http://schema.org/SportsEvent
*/
abstract class TypeSportsEvent extends TypeEvent
{
	/**
	 * The Schema.org Type Scope
	 *
	 * @var string
	 */
	protected static $scope = 'https://schema.org/SportsEvent';

	/**
	 * The away team in a sports event.
	 * Expected Type: Person, SportsTeam
	 * 
	 * @var	array
	 */
	protected static $awayTeam = array('value' => 'awayTeam',
		'expectedTypes' => array('Person', 'SportsTeam')
	);

	/**
	 * A competitor in a sports event.
	 * Expected Type: Person, SportsTeam
	 * 
	 * @var	array
	 */
	protected static $competitor = array('value' => 'competitor',
		'expectedTypes' => array('Person', 'SportsTeam')
	);

	/**
	 * The home team in a sports event.
	 * Expected Type: Person, SportsTeam
	 * 
	 * @var	array
	 */
	protected static $homeTeam = array('value' => 'homeTeam',
		'expectedTypes' => array('Person', 'SportsTeam')
	);

	/**
	 * Return the 'awayTeam' Property value
	 *
	 * @return	string
	 */
	public static function pAwayTeam()
	{
		return self::getValue(self::$awayTeam);
	}

	/**
	 * Return the 'competitor' Property value
	 *
	 * @return	string
	 */
	public static function pCompetitor()
	{
		return self::getValue(self::$competitor);
	}

	/**
	 * Return the 'homeTeam' Property value
	 *
	 * @return	string
	 */
	public static function pHomeTeam()
	{
		return self::getValue(self::$homeTeam);
	}
}
