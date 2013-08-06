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
 * Any rule set or interactive tool for estimating the risk of developing a complication or condition.
 *
 * @package     Joomla.Platform
 * @subpackage  Microdata
 *
 * @see         http://schema.org/MedicalRiskEstimator
 * @since       13.1
*/
abstract class TypeMedicalRiskEstimator extends TypeMedicalEntity
{
	/**
	 * The Schema.org Type Scope
	 *
	 * @var string
	 */
	protected static $scope = 'https://schema.org/MedicalRiskEstimator';

	/**
	 * The condition, complication, or symptom whose risk is being estimated.
	 * Expected Type: MedicalEntity
	 * 
	 * @var	array
	 */
	protected static $estimatesRiskOf = array('value' => 'estimatesRiskOf',
		'expectedTypes' => array('MedicalEntity')
	);

	/**
	 * A modifiable or non-modifiable risk factor included in the calculation, e.g. age, coexisting condition.
	 * Expected Type: MedicalRiskFactor
	 * 
	 * @var	array
	 */
	protected static $includedRiskFactor = array('value' => 'includedRiskFactor',
		'expectedTypes' => array('MedicalRiskFactor')
	);

	/**
	 * Return the 'estimatesRiskOf' Property value
	 *
	 * @return	string
	 */
	public static function pEstimatesRiskOf()
	{
		return self::getValue(self::$estimatesRiskOf);
	}

	/**
	 * Return the 'includedRiskFactor' Property value
	 *
	 * @return	string
	 */
	public static function pIncludedRiskFactor()
	{
		return self::getValue(self::$includedRiskFactor);
	}
}
