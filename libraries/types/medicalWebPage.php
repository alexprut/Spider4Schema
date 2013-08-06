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
 * A web page that provides medical information.
 *
 * @package     Joomla.Platform
 * @subpackage  Microdata
 *
 * @see         http://schema.org/MedicalWebPage
 * @since       13.1
*/
abstract class TypeMedicalWebPage extends TypeWebPage
{
	/**
	 * The Schema.org Type Scope
	 *
	 * @var string
	 */
	protected static $scope = 'https://schema.org/MedicalWebPage';

	/**
	 * An aspect of medical practice that is considered on the page, such as 'diagnosis', 'treatment', 'causes', 'prognosis', 'etiology', 'epidemiology', etc.
	 * Expected Type: Text
	 * 
	 * @var	array
	 */
	protected static $aspect = array('value' => 'aspect',
		'expectedTypes' => array('Text')
	);

	/**
	 * Return the 'aspect' Property value
	 *
	 * @return	string
	 */
	public static function pAspect()
	{
		return self::getValue(self::$aspect);
	}
}
