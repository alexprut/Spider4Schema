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
 * A medical clinic.
 *
 * @package     Joomla.Platform
 * @subpackage  Microdata
 *
 * @see         http://schema.org/MedicalClinic
 * @since       13.1
*/
abstract class TypeMedicalClinic extends TypeMedicalOrganization
{
	/**
	 * The Schema.org Type Scope
	 *
	 * @var string
	 */
	protected static $scope = 'https://schema.org/MedicalClinic';

	/**
	 * A medical service available from this provider.
	 * Expected Type: MedicalProcedure', 'MedicalTest', 'MedicalTherapy
	 * 
	 * @var	array
	 */
	protected static $availableService = array('value' => 'availableService',
		'expectedTypes' => array('MedicalProcedure', 'MedicalTest', 'MedicalTherapy')
	);

	/**
	 * A medical specialty of the provider.
	 * Expected Type: MedicalSpecialty
	 * 
	 * @var	array
	 */
	protected static $medicalSpecialty = array('value' => 'medicalSpecialty',
		'expectedTypes' => array('MedicalSpecialty')
	);

	/**
	 * Return the 'availableService' Property value
	 *
	 * @return	string
	 */
	public static function pAvailableService()
	{
		return self::getValue(self::$availableService);
	}

	/**
	 * Return the 'medicalSpecialty' Property value
	 *
	 * @return	string
	 */
	public static function pMedicalSpecialty()
	{
		return self::getValue(self::$medicalSpecialty);
	}
}
