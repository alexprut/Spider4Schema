<?php
/**
 * Fitness-related activity designed for a specific health-related purpose, including defined exercise routines as well as activity prescribed by a clinician.
 *
 * @see    http://schema.org/ExercisePlan
*/
abstract class TypeExercisePlan extends TypeCreativeWork
{
	/**
	 * The Schema.org Type Scope
	 *
	 * @var string
	 */
	protected static $scope = 'https://schema.org/ExercisePlan';

	/**
	 * Length of time to engage in the activity.
	 * Expected Type: Duration
	 * 
	 * @var	array
	 */
	protected static $activityDuration = array('value' => 'activityDuration',
		'expectedTypes' => array('Duration')
	);

	/**
	 * How often one should engage in the activity.
	 * Expected Type: Text
	 * 
	 * @var	array
	 */
	protected static $activityFrequency = array('value' => 'activityFrequency',
		'expectedTypes' => array('Text')
	);

	/**
	 * Any additional component of the exercise prescription that may need to be articulated to the patient. This may include the order of exercises, the number of repetitions of movement, quantitative distance, progressions over time, etc.
	 * Expected Type: Text
	 * 
	 * @var	array
	 */
	protected static $additionalVariable = array('value' => 'additionalVariable',
		'expectedTypes' => array('Text')
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
	 * Quantitative measure gauging the degree of force involved in the exercise, for example, heartbeats per minute. May include the velocity of the movement.
	 * Expected Type: Text
	 * 
	 * @var	array
	 */
	protected static $intensity = array('value' => 'intensity',
		'expectedTypes' => array('Text')
	);

	/**
	 * Number of times one should repeat the activity.
	 * Expected Type: Number
	 * 
	 * @var	array
	 */
	protected static $repetitions = array('value' => 'repetitions',
		'expectedTypes' => array('Number')
	);

	/**
	 * How often one should break from the activity.
	 * Expected Type: Text
	 * 
	 * @var	array
	 */
	protected static $restPeriods = array('value' => 'restPeriods',
		'expectedTypes' => array('Text')
	);

	/**
	 * Quantitative measure of the physiologic output of the exercise; also referred to as energy expenditure.
	 * Expected Type: Energy
	 * 
	 * @var	array
	 */
	protected static $workload = array('value' => 'workload',
		'expectedTypes' => array('Energy')
	);

	/**
	 * Return the 'activityDuration' Property value
	 *
	 * @return	string
	 */
	public static function pActivityDuration()
	{
		return self::getValue(self::$activityDuration);
	}

	/**
	 * Return the 'activityFrequency' Property value
	 *
	 * @return	string
	 */
	public static function pActivityFrequency()
	{
		return self::getValue(self::$activityFrequency);
	}

	/**
	 * Return the 'additionalVariable' Property value
	 *
	 * @return	string
	 */
	public static function pAdditionalVariable()
	{
		return self::getValue(self::$additionalVariable);
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
	 * Return the 'intensity' Property value
	 *
	 * @return	string
	 */
	public static function pIntensity()
	{
		return self::getValue(self::$intensity);
	}

	/**
	 * Return the 'repetitions' Property value
	 *
	 * @return	string
	 */
	public static function pRepetitions()
	{
		return self::getValue(self::$repetitions);
	}

	/**
	 * Return the 'restPeriods' Property value
	 *
	 * @return	string
	 */
	public static function pRestPeriods()
	{
		return self::getValue(self::$restPeriods);
	}

	/**
	 * Return the 'workload' Property value
	 *
	 * @return	string
	 */
	public static function pWorkload()
	{
		return self::getValue(self::$workload);
	}
}
