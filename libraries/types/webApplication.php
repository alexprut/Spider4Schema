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
 * Web applications.
 *
 * @package     Joomla.Platform
 * @subpackage  Microdata
 *
 * @see         http://schema.org/WebApplication
 * @since       13.1
*/
abstract class TypeWebApplication extends TypeSoftwareApplication
{
	/**
	 * The Schema.org Type Scope
	 *
	 * @var string
	 */
	protected static $scope = 'https://schema.org/WebApplication';

	/**
	 * Specifies browser requirements in human-readable text. For example,"requires HTML5 support".
	 * Expected Type: Text
	 * 
	 * @var	array
	 */
	protected static $browserRequirements = array('value' => 'browserRequirements',
		'expectedTypes' => array('Text')
	);

	/**
	 * Return the 'browserRequirements' Property value
	 *
	 * @return	string
	 */
	public static function pBrowserRequirements()
	{
		return self::getValue(self::$browserRequirements);
	}
}
