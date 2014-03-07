<?php
/**
 * A common pathway for the electrochemical nerve impulses that are transmitted along each of the axons.
 *
 * @see    http://schema.org/Nerve
*/
abstract class TypeNerve extends TypeAnatomicalStructure
{
	/**
	 * The Schema.org Type Scope
	 *
	 * @var string
	 */
	protected static $scope = 'https://schema.org/Nerve';

	/**
	 * The branches that delineate from the nerve bundle.
	 * Expected Type: AnatomicalStructure, Nerve
	 * 
	 * @var	array
	 */
	protected static $branch = array('value' => 'branch',
		'expectedTypes' => array('AnatomicalStructure', 'Nerve')
	);

	/**
	 * The neurological pathway extension that involves muscle control.
	 * Expected Type: Muscle
	 * 
	 * @var	array
	 */
	protected static $nerveMotor = array('value' => 'nerveMotor',
		'expectedTypes' => array('Muscle')
	);

	/**
	 * The neurological pathway extension that inputs and sends information to the brain or spinal cord.
	 * Expected Type: AnatomicalStructure, SuperficialAnatomy
	 * 
	 * @var	array
	 */
	protected static $sensoryUnit = array('value' => 'sensoryUnit',
		'expectedTypes' => array('AnatomicalStructure', 'SuperficialAnatomy')
	);

	/**
	 * The neurological pathway that originates the neurons.
	 * Expected Type: BrainStructure
	 * 
	 * @var	array
	 */
	protected static $sourcedFrom = array('value' => 'sourcedFrom',
		'expectedTypes' => array('BrainStructure')
	);

	/**
	 * Return the 'branch' Property value
	 *
	 * @return	string
	 */
	public static function pBranch()
	{
		return self::getValue(self::$branch);
	}

	/**
	 * Return the 'nerveMotor' Property value
	 *
	 * @return	string
	 */
	public static function pNerveMotor()
	{
		return self::getValue(self::$nerveMotor);
	}

	/**
	 * Return the 'sensoryUnit' Property value
	 *
	 * @return	string
	 */
	public static function pSensoryUnit()
	{
		return self::getValue(self::$sensoryUnit);
	}

	/**
	 * Return the 'sourcedFrom' Property value
	 *
	 * @return	string
	 */
	public static function pSourcedFrom()
	{
		return self::getValue(self::$sourcedFrom);
	}
}
