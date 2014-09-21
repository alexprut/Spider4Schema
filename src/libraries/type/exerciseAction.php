<?php
/**
 * The act of participating in exertive activity for the purposes of improving health and fitness
 *
 * @see    http://schema.org/ExerciseAction
*/
abstract class TypeExerciseAction extends TypePlayAction
{
	/**
	 * The Schema.org Type Scope
	 *
	 * @var string
	 */
	protected static $scope = 'https://schema.org/ExerciseAction';

	/**
	 * A sub property of location. The course where this action was taken.
	 * Expected Type: Place
	 * 
	 * @var	array
	 */
	protected static $course = array('value' => 'course',
		'expectedTypes' => array('Place')
	);

	/**
	 * A sub property of instrument. The diet used in this action.
	 * Expected Type: Diet
	 * 
	 * @var	array
	 */
	protected static $diet = array('value' => 'diet',
		'expectedTypes' => array('Diet')
	);

	/**
	 * The distance travelled, e.g. exercising or travelling.
	 * Expected Type: Distance
	 * 
	 * @var	array
	 */
	protected static $distance = array('value' => 'distance',
		'expectedTypes' => array('Distance')
	);

	/**
	 * A sub property of instrument. The exercise plan used on this action.
	 * Expected Type: ExercisePlan
	 * 
	 * @var	array
	 */
	protected static $exercisePlan = array('value' => 'exercisePlan',
		'expectedTypes' => array('ExercisePlan')
	);

	/**
	 * Type(s) of exercise or activity, such as strength training, flexibility training, aerobics, cardiac rehabilitation, etc.
	 * Expected Type: Text
	 * 
	 * @var	array
	 */
	protected static $exerciseType = array('value' => 'exerciseType',
		'expectedTypes' => array('Text')
	);

	/**
	 * A sub property of location. The original location of the object or the agent before the action.
	 * Expected Type: Number, Place
	 * 
	 * @var	array
	 */
	protected static $fromLocation = array('value' => 'fromLocation',
		'expectedTypes' => array('Number', 'Place')
	);

	/**
	 * A sub property of participant. The opponent on this action.
	 * Expected Type: Person
	 * 
	 * @var	array
	 */
	protected static $opponent = array('value' => 'opponent',
		'expectedTypes' => array('Person')
	);

	/**
	 * A sub property of location. The sports activity location where this action occurred.
	 * Expected Type: SportsActivityLocation
	 * 
	 * @var	array
	 */
	protected static $sportsActivityLocation = array('value' => 'sportsActivityLocation',
		'expectedTypes' => array('SportsActivityLocation')
	);

	/**
	 * A sub property of location. The sports event where this action occurred.
	 * Expected Type: SportsEvent
	 * 
	 * @var	array
	 */
	protected static $sportsEvent = array('value' => 'sportsEvent',
		'expectedTypes' => array('SportsEvent')
	);

	/**
	 * A sub property of participant. The sports team that participated on this action.
	 * Expected Type: SportsTeam
	 * 
	 * @var	array
	 */
	protected static $sportsTeam = array('value' => 'sportsTeam',
		'expectedTypes' => array('SportsTeam')
	);

	/**
	 * A sub property of location. The final location of the object or the agent after the action.
	 * Expected Type: Number, Place
	 * 
	 * @var	array
	 */
	protected static $toLocation = array('value' => 'toLocation',
		'expectedTypes' => array('Number', 'Place')
	);

	/**
	 * Return the 'course' Property value
	 *
	 * @return	string
	 */
	public static function pCourse()
	{
		return self::getValue(self::$course);
	}

	/**
	 * Return the 'diet' Property value
	 *
	 * @return	string
	 */
	public static function pDiet()
	{
		return self::getValue(self::$diet);
	}

	/**
	 * Return the 'distance' Property value
	 *
	 * @return	string
	 */
	public static function pDistance()
	{
		return self::getValue(self::$distance);
	}

	/**
	 * Return the 'exercisePlan' Property value
	 *
	 * @return	string
	 */
	public static function pExercisePlan()
	{
		return self::getValue(self::$exercisePlan);
	}

	/**
	 * Return the 'exerciseType' Property value
	 *
	 * @return	string
	 */
	public static function pExerciseType()
	{
		return self::getValue(self::$exerciseType);
	}

	/**
	 * Return the 'fromLocation' Property value
	 *
	 * @return	string
	 */
	public static function pFromLocation()
	{
		return self::getValue(self::$fromLocation);
	}

	/**
	 * Return the 'opponent' Property value
	 *
	 * @return	string
	 */
	public static function pOpponent()
	{
		return self::getValue(self::$opponent);
	}

	/**
	 * Return the 'sportsActivityLocation' Property value
	 *
	 * @return	string
	 */
	public static function pSportsActivityLocation()
	{
		return self::getValue(self::$sportsActivityLocation);
	}

	/**
	 * Return the 'sportsEvent' Property value
	 *
	 * @return	string
	 */
	public static function pSportsEvent()
	{
		return self::getValue(self::$sportsEvent);
	}

	/**
	 * Return the 'sportsTeam' Property value
	 *
	 * @return	string
	 */
	public static function pSportsTeam()
	{
		return self::getValue(self::$sportsTeam);
	}

	/**
	 * Return the 'toLocation' Property value
	 *
	 * @return	string
	 */
	public static function pToLocation()
	{
		return self::getValue(self::$toLocation);
	}
}
