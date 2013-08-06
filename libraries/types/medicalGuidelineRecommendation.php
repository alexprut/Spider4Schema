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
 * A guideline recommendation that is regarded as efficacious and where quality of the data supporting the recommendation is sound.
 *
 * @package     Joomla.Platform
 * @subpackage  Microdata
 *
 * @see         http://schema.org/MedicalGuidelineRecommendation
 * @since       13.1
*/
abstract class TypeMedicalGuidelineRecommendation extends TypeMedicalGuideline
{
	/**
	 * The Schema.org Type Scope
	 *
	 * @var string
	 */
	protected static $scope = 'https://schema.org/MedicalGuidelineRecommendation';

	/**
	 * Strength of the guideline's recommendation (e.g. 'class I').
	 * Expected Type: Text
	 * 
	 * @var	array
	 */
	protected static $recommendationStrength = array('value' => 'recommendationStrength',
		'expectedTypes' => array('Text')
	);

	/**
	 * Return the 'recommendationStrength' Property value
	 *
	 * @return	string
	 */
	public static function pRecommendationStrength()
	{
		return self::getValue(self::$recommendationStrength);
	}
}
