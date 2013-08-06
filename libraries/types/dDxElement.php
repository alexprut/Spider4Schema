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
 * An alternative, closely-related condition typically considered later in the differential diagnosis process along with the signs that are used to distinguish it.
 *
 * @package     Joomla.Platform
 * @subpackage  Microdata
 *
 * @see         http://schema.org/DDxElement
 * @since       13.1
*/
abstract class TypeDDxElement extends TypeMedicalIntangible
{
	/**
	 * The Schema.org Type Scope
	 *
	 * @var string
	 */
	protected static $scope = 'https://schema.org/DDxElement';

	/**
	 * One or more alternative conditions considered in the differential diagnosis process.
	 * Expected Type: MedicalCondition
	 * 
	 * @var	array
	 */
	protected static $diagnosis = array('value' => 'diagnosis',
		'expectedTypes' => array('MedicalCondition')
	);

	/**
	 * One of a set of signs and symptoms that can be used to distinguish this diagnosis from others in the differential diagnosis.
	 * Expected Type: MedicalSignOrSymptom
	 * 
	 * @var	array
	 */
	protected static $distinguishingSign = array('value' => 'distinguishingSign',
		'expectedTypes' => array('MedicalSignOrSymptom')
	);

	/**
	 * Return the 'diagnosis' Property value
	 *
	 * @return	string
	 */
	public static function pDiagnosis()
	{
		return self::getValue(self::$diagnosis);
	}

	/**
	 * Return the 'distinguishingSign' Property value
	 *
	 * @return	string
	 */
	public static function pDistinguishingSign()
	{
		return self::getValue(self::$distinguishingSign);
	}
}
