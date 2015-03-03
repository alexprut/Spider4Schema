<?php
/**
 * A muscle is an anatomical structure consisting of a contractile form of tissue that animals use to effect movement.
 *
 * @see    http://schema.org/Muscle
*/
abstract class TypeMuscle extends TypeAnatomicalStructure
{
	/**
	 * The Schema.org Type Scope
	 *
	 * @var string
	 */
	protected static $scope = 'https://schema.org/Muscle';

	/**
	 * The muscle whose action counteracts the specified muscle.
	 * Expected Type: Muscle
	 * 
	 * @var	array
	 */
	protected static $antagonist = array('value' => 'antagonist',
		'expectedTypes' => array('Muscle')
	);

	/**
	 * The blood vessel that carries blood from the heart to the muscle.
	 * Expected Type: Vessel
	 * 
	 * @var	array
	 */
	protected static $bloodSupply = array('value' => 'bloodSupply',
		'expectedTypes' => array('Vessel')
	);

	/**
	 * The place of attachment of a muscle, or what the muscle moves.
	 * Expected Type: AnatomicalStructure
	 * 
	 * @var	array
	 */
	protected static $insertion = array('value' => 'insertion',
		'expectedTypes' => array('AnatomicalStructure')
	);

	/**
	 * The movement the muscle generates. Supersedes action.
	 * Expected Type: Text
	 * 
	 * @var	array
	 */
	protected static $muscleAction = array('value' => 'muscleAction',
		'expectedTypes' => array('Text')
	);

	/**
	 * The underlying innervation associated with the muscle.
	 * Expected Type: Nerve
	 * 
	 * @var	array
	 */
	protected static $nerve = array('value' => 'nerve',
		'expectedTypes' => array('Nerve')
	);

	/**
	 * The place or point where a muscle arises.
	 * Expected Type: AnatomicalStructure
	 * 
	 * @var	array
	 */
	protected static $origin = array('value' => 'origin',
		'expectedTypes' => array('AnatomicalStructure')
	);

	/**
	 * Return the 'antagonist' Property value
	 *
	 * @return	string
	 */
	public static function pAntagonist()
	{
		return self::getValue(self::$antagonist);
	}

	/**
	 * Return the 'bloodSupply' Property value
	 *
	 * @return	string
	 */
	public static function pBloodSupply()
	{
		return self::getValue(self::$bloodSupply);
	}

	/**
	 * Return the 'insertion' Property value
	 *
	 * @return	string
	 */
	public static function pInsertion()
	{
		return self::getValue(self::$insertion);
	}

	/**
	 * Return the 'muscleAction' Property value
	 *
	 * @return	string
	 */
	public static function pMuscleAction()
	{
		return self::getValue(self::$muscleAction);
	}

	/**
	 * Return the 'nerve' Property value
	 *
	 * @return	string
	 */
	public static function pNerve()
	{
		return self::getValue(self::$nerve);
	}

	/**
	 * Return the 'origin' Property value
	 *
	 * @return	string
	 */
	public static function pOrigin()
	{
		return self::getValue(self::$origin);
	}
}
