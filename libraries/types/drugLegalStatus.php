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
 * The legal availability status of a medical drug.
 *
 * @package     Joomla.Platform
 * @subpackage  Microdata
 *
 * @see         http://schema.org/DrugLegalStatus
 * @since       13.1
*/
abstract class TypeDrugLegalStatus extends TypeMedicalIntangible
{
	/**
	 * The Schema.org Type Scope
	 *
	 * @var string
	 */
	protected static $scope = 'https://schema.org/DrugLegalStatus';

	/**
	 * The location in which the status applies.
	 * Expected Type: AdministrativeArea
	 * 
	 * @var	array
	 */
	protected static $applicableLocation = array('value' => 'applicableLocation',
		'expectedTypes' => array('AdministrativeArea')
	);

	/**
	 * Return the 'applicableLocation' Property value
	 *
	 * @return	string
	 */
	public static function pApplicableLocation()
	{
		return self::getValue(self::$applicableLocation);
	}
}
