<?php
/**
 * A set of characteristics belonging to people, e.g. who compose an item's target audience.
 *
 * @see    http://schema.org/PeopleAudience
*/
abstract class TypePeopleAudience extends TypeAudience
{
	/**
	 * The Schema.org Type Scope
	 *
	 * @var string
	 */
	protected static $scope = 'https://schema.org/PeopleAudience';

	/**
	 * Expectations for health conditions of target audience.
	 * Expected Type: MedicalCondition
	 * 
	 * @var	array
	 */
	protected static $healthCondition = array('value' => 'healthCondition',
		'expectedTypes' => array('MedicalCondition')
	);

	/**
	 * Audiences defined by a person's gender.
	 * Expected Type: Text
	 * 
	 * @var	array
	 */
	protected static $requiredGender = array('value' => 'requiredGender',
		'expectedTypes' => array('Text')
	);

	/**
	 * Audiences defined by a person's maximum age.
	 * Expected Type: Integer
	 * 
	 * @var	array
	 */
	protected static $requiredMaxAge = array('value' => 'requiredMaxAge',
		'expectedTypes' => array('Integer')
	);

	/**
	 * Audiences defined by a person's minimum age.
	 * Expected Type: Integer
	 * 
	 * @var	array
	 */
	protected static $requiredMinAge = array('value' => 'requiredMinAge',
		'expectedTypes' => array('Integer')
	);

	/**
	 * The gender of the person or audience.
	 * Expected Type: Text
	 * 
	 * @var	array
	 */
	protected static $suggestedGender = array('value' => 'suggestedGender',
		'expectedTypes' => array('Text')
	);

	/**
	 * Maximal age recommended for viewing content.
	 * Expected Type: Number
	 * 
	 * @var	array
	 */
	protected static $suggestedMaxAge = array('value' => 'suggestedMaxAge',
		'expectedTypes' => array('Number')
	);

	/**
	 * Minimal age recommended for viewing content.
	 * Expected Type: Number
	 * 
	 * @var	array
	 */
	protected static $suggestedMinAge = array('value' => 'suggestedMinAge',
		'expectedTypes' => array('Number')
	);

	/**
	 * Return the 'healthCondition' Property value
	 *
	 * @return	string
	 */
	public static function pHealthCondition()
	{
		return self::getValue(self::$healthCondition);
	}

	/**
	 * Return the 'requiredGender' Property value
	 *
	 * @return	string
	 */
	public static function pRequiredGender()
	{
		return self::getValue(self::$requiredGender);
	}

	/**
	 * Return the 'requiredMaxAge' Property value
	 *
	 * @return	string
	 */
	public static function pRequiredMaxAge()
	{
		return self::getValue(self::$requiredMaxAge);
	}

	/**
	 * Return the 'requiredMinAge' Property value
	 *
	 * @return	string
	 */
	public static function pRequiredMinAge()
	{
		return self::getValue(self::$requiredMinAge);
	}

	/**
	 * Return the 'suggestedGender' Property value
	 *
	 * @return	string
	 */
	public static function pSuggestedGender()
	{
		return self::getValue(self::$suggestedGender);
	}

	/**
	 * Return the 'suggestedMaxAge' Property value
	 *
	 * @return	string
	 */
	public static function pSuggestedMaxAge()
	{
		return self::getValue(self::$suggestedMaxAge);
	}

	/**
	 * Return the 'suggestedMinAge' Property value
	 *
	 * @return	string
	 */
	public static function pSuggestedMinAge()
	{
		return self::getValue(self::$suggestedMinAge);
	}
}
