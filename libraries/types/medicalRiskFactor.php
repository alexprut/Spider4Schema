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
 * A risk factor is anything that increases a person's likelihood of developing or contracting a disease, medical condition, or complication.
 *
 * @package     Joomla.Platform
 * @subpackage  Microdata
 *
 * @see         http://schema.org/MedicalRiskFactor
 * @since       13.1
*/
abstract class TypeMedicalRiskFactor extends TypeMedicalEntity
{
	/**
	 * The Schema.org Type Scope
	 *
	 * @var string
	 */
	protected static $scope = 'https://schema.org/MedicalRiskFactor';

	/**
	 * The condition, complication, etc. influenced by this factor.
	 * Expected Type: MedicalEntity
	 * 
	 * @var	array
	 */
	protected static $increasesRiskOf = array('value' => 'increasesRiskOf',
		'expectedTypes' => array('MedicalEntity')
	);

	/**
	 * Return the 'increasesRiskOf' Property value
	 *
	 * @return	string
	 */
	public static function pIncreasesRiskOf()
	{
		return self::getValue(self::$increasesRiskOf);
	}
}
