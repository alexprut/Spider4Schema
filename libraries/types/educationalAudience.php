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
 * An EducationalAudience
 *
 * @package     Joomla.Platform
 * @subpackage  Microdata
 *
 * @see         http://schema.org/EducationalAudience
 * @since       13.1
*/
abstract class TypeEducationalAudience extends TypeAudience
{
	/**
	 * The Schema.org Type Scope
	 *
	 * @var string
	 */
	protected static $scope = 'https://schema.org/EducationalAudience';

	/**
	 * An educationalRole of an EducationalAudience
	 * Expected Type: Text
	 * 
	 * @var	array
	 */
	protected static $educationalRole = array('value' => 'educationalRole',
		'expectedTypes' => array('Text')
	);

	/**
	 * Return the 'educationalRole' Property value
	 *
	 * @return	string
	 */
	public static function pEducationalRole()
	{
		return self::getValue(self::$educationalRole);
	}
}
