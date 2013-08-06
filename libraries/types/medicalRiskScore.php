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
 * A simple system that adds up the number of risk factors to yield a score that is associated with prognosis, e.g. CHAD score, TIMI risk score.
 *
 * @package     Joomla.Platform
 * @subpackage  Microdata
 *
 * @see         http://schema.org/MedicalRiskScore
 * @since       13.1
*/
abstract class TypeMedicalRiskScore extends TypeMedicalRiskEstimator
{
	/**
	 * The Schema.org Type Scope
	 *
	 * @var string
	 */
	protected static $scope = 'https://schema.org/MedicalRiskScore';

	/**
	 * The algorithm or rules to follow to compute the score.
	 * Expected Type: Text
	 * 
	 * @var	array
	 */
	protected static $algorithm = array('value' => 'algorithm',
		'expectedTypes' => array('Text')
	);

	/**
	 * Return the 'algorithm' Property value
	 *
	 * @return	string
	 */
	public static function pAlgorithm()
	{
		return self::getValue(self::$algorithm);
	}
}
