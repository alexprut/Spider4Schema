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
 * A medical test performed by a laboratory that typically involves examination of a tissue sample by a pathologist.
 *
 * @package     Joomla.Platform
 * @subpackage  Microdata
 *
 * @see         http://schema.org/PathologyTest
 * @since       13.1
*/
abstract class TypePathologyTest extends TypeMedicalTest
{
	/**
	 * The Schema.org Type Scope
	 *
	 * @var string
	 */
	protected static $scope = 'https://schema.org/PathologyTest';

	/**
	 * The type of tissue sample required for the test.
	 * Expected Type: Text
	 * 
	 * @var	array
	 */
	protected static $tissueSample = array('value' => 'tissueSample',
		'expectedTypes' => array('Text')
	);

	/**
	 * Return the 'tissueSample' Property value
	 *
	 * @return	string
	 */
	public static function pTissueSample()
	{
		return self::getValue(self::$tissueSample);
	}
}
