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
 * A mobile software application.
 *
 * @package     Joomla.Platform
 * @subpackage  Microdata
 *
 * @see         http://schema.org/MobileApplication
 * @since       13.1
*/
abstract class TypeMobileApplication extends TypeSoftwareApplication
{
	/**
	 * The Schema.org Type Scope
	 *
	 * @var string
	 */
	protected static $scope = 'https://schema.org/MobileApplication';

	/**
	 * Specifies specific carrier(s) requirements for the application (e.g. an application may only work on a specific carrier network).
	 * Expected Type: Text
	 * 
	 * @var	array
	 */
	protected static $carrierRequirements = array('value' => 'carrierRequirements',
		'expectedTypes' => array('Text')
	);

	/**
	 * Return the 'carrierRequirements' Property value
	 *
	 * @return	string
	 */
	public static function pCarrierRequirements()
	{
		return self::getValue(self::$carrierRequirements);
	}
}
