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
 * A medical laboratory that offers on-site or off-site diagnostic services.
 *
 * @package     Joomla.Platform
 * @subpackage  Microdata
 *
 * @see         http://schema.org/DiagnosticLab
 * @since       13.1
*/
abstract class TypeDiagnosticLab extends TypeMedicalOrganization
{
	/**
	 * The Schema.org Type Scope
	 *
	 * @var string
	 */
	protected static $scope = 'https://schema.org/DiagnosticLab';

	/**
	 * A diagnostic test or procedure offered by this lab.
	 * Expected Type: MedicalTest
	 * 
	 * @var	array
	 */
	protected static $availableTest = array('value' => 'availableTest',
		'expectedTypes' => array('MedicalTest')
	);

	/**
	 * Return the 'availableTest' Property value
	 *
	 * @return	string
	 */
	public static function pAvailableTest()
	{
		return self::getValue(self::$availableTest);
	}
}
