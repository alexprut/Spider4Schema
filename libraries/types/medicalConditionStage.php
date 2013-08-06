<?php
/**
 * @package     Joomla.Platform
 * @subpackage  Microdata
 *
 * @copyright   Copyright (C) 2005 - 2013 Open Source Matters, Inc. All rights reserved.
 * @license     GNU General Public License version 2 or later; see LICENSE
 */

defined("JPATH_PLATFORM") or die;

/**
 * A stage of a medical condition, such as 'Stage IIIa'.
 *
 * @package     Joomla.Platform
 * @subpackage  Microdata
 *
 * @see         http://schema.org/MedicalConditionStage
 * @since       13.1
*/
abstract class TypeMedicalConditionStage extends TypeMedicalIntangible
{
	/**
	 * The Schema.org Type Scope
	 *
	 * @var string
	 */
	protected static $scope = 'https://schema.org/MedicalConditionStage';

	/**
	 * The stage represented as a number, e.g. 3.
	 * Expected Type: Number
	 * 
	 * @var	array
	 */
	protected static $stageAsNumber = array('value' => 'stageAsNumber',
		'expectedTypes' => array('Number')
	);

	/**
	 * The substage, e.g. 'a' for Stage IIIa.
	 * Expected Type: Text
	 * 
	 * @var	array
	 */
	protected static $subStageSuffix = array('value' => 'subStageSuffix',
		'expectedTypes' => array('Text')
	);

	/**
	 * Return the 'stageAsNumber' Property value
	 *
	 * @return	string
	 */
	public static function pStageAsNumber()
	{
		return self::getValue(self::$stageAsNumber);
	}

	/**
	 * Return the 'subStageSuffix' Property value
	 *
	 * @return	string
	 */
	public static function pSubStageSuffix()
	{
		return self::getValue(self::$subStageSuffix);
	}
}
