<?php
/**
 * A type of blood vessel that specifically carries lymph fluid unidirectionally toward the heart.
 *
 * @see    http://schema.org/LymphaticVessel
*/
abstract class TypeLymphaticVessel extends TypeVessel
{
	/**
	 * The Schema.org Type Scope
	 *
	 * @var string
	 */
	protected static $scope = 'https://schema.org/LymphaticVessel';

	/**
	 * The vasculature the lymphatic structure originates, or afferents, from.
	 * Expected Type: Vessel
	 * 
	 * @var	array
	 */
	protected static $originatesFrom = array('value' => 'originatesFrom',
		'expectedTypes' => array('Vessel')
	);

	/**
	 * The anatomical or organ system drained by this vessel; generally refers to a specific part of an organ.
	 * Expected Type: AnatomicalSystem, AnatomicalStructure
	 * 
	 * @var	array
	 */
	protected static $regionDrained = array('value' => 'regionDrained',
		'expectedTypes' => array('AnatomicalSystem', 'AnatomicalStructure')
	);

	/**
	 * The vasculature the lymphatic structure runs, or efferents, to.
	 * Expected Type: Vessel
	 * 
	 * @var	array
	 */
	protected static $runsTo = array('value' => 'runsTo',
		'expectedTypes' => array('Vessel')
	);

	/**
	 * Return the 'originatesFrom' Property value
	 *
	 * @return	string
	 */
	public static function pOriginatesFrom()
	{
		return self::getValue(self::$originatesFrom);
	}

	/**
	 * Return the 'regionDrained' Property value
	 *
	 * @return	string
	 */
	public static function pRegionDrained()
	{
		return self::getValue(self::$regionDrained);
	}

	/**
	 * Return the 'runsTo' Property value
	 *
	 * @return	string
	 */
	public static function pRunsTo()
	{
		return self::getValue(self::$runsTo);
	}
}
