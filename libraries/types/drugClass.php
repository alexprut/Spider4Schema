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
 * A class of medical drugs, e.g., statins. Classes can represent general pharmacological class, common mechanisms of action, common physiological effects, etc.
 *
 * @package     Joomla.Platform
 * @subpackage  Microdata
 *
 * @see         http://schema.org/DrugClass
 * @since       13.1
*/
abstract class TypeDrugClass extends TypeMedicalTherapy
{
	/**
	 * The Schema.org Type Scope
	 *
	 * @var string
	 */
	protected static $scope = 'https://schema.org/DrugClass';

	/**
	 * A drug in this drug class.
	 * Expected Type: Drug
	 * 
	 * @var	array
	 */
	protected static $drug = array('value' => 'drug',
		'expectedTypes' => array('Drug')
	);

	/**
	 * Return the 'drug' Property value
	 *
	 * @return	string
	 */
	public static function pDrug()
	{
		return self::getValue(self::$drug);
	}
}
