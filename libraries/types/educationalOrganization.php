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
 * An educational organization.
 *
 * @package     Joomla.Platform
 * @subpackage  Microdata
 *
 * @see         http://schema.org/EducationalOrganization
 * @since       13.1
*/
abstract class TypeEducationalOrganization extends TypeOrganization
{
	/**
	 * The Schema.org Type Scope
	 *
	 * @var string
	 */
	protected static $scope = 'https://schema.org/EducationalOrganization';

	/**
	 * Alumni of educational organization.
	 * Expected Type: Person
	 * 
	 * @var	array
	 */
	protected static $alumni = array('value' => 'alumni',
		'expectedTypes' => array('Person')
	);

	/**
	 * Return the 'alumni' Property value
	 *
	 * @return	string
	 */
	public static function pAlumni()
	{
		return self::getValue(self::$alumni);
	}
}
