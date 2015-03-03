<?php
/**
 * Organization: Sports team.
 *
 * @see    http://schema.org/SportsTeam
*/
abstract class TypeSportsTeam extends TypeSportsOrganization
{
	/**
	 * The Schema.org Type Scope
	 *
	 * @var string
	 */
	protected static $scope = 'https://schema.org/SportsTeam';

	/**
	 * A person that acts as performing member of a sports team; a player as opposed to a coach.
	 * Expected Type: Person
	 * 
	 * @var	array
	 */
	protected static $athlete = array('value' => 'athlete',
		'expectedTypes' => array('Person')
	);

	/**
	 * A person that acts in a coaching role for a sports team.
	 * Expected Type: Person
	 * 
	 * @var	array
	 */
	protected static $coach = array('value' => 'coach',
		'expectedTypes' => array('Person')
	);

	/**
	 * Return the 'athlete' Property value
	 *
	 * @return	string
	 */
	public static function pAthlete()
	{
		return self::getValue(self::$athlete);
	}

	/**
	 * Return the 'coach' Property value
	 *
	 * @return	string
	 */
	public static function pCoach()
	{
		return self::getValue(self::$coach);
	}
}
