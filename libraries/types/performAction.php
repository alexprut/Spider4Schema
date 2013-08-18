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
 * The act of participating in performance arts.
 *
 * @package     Joomla.Platform
 * @subpackage  Microdata
 *
 * @see         http://schema.org/PerformAction
 * @since       13.1
*/
abstract class TypePerformAction extends TypePlayAction
{
	/**
	 * The Schema.org Type Scope
	 *
	 * @var string
	 */
	protected static $scope = 'https://schema.org/PerformAction';

	/**
	 * A sub property of location. The entertainment business where the action occurred.
	 * Expected Type: EntertainmentBusiness
	 * 
	 * @var	array
	 */
	protected static $entertainmentBusiness = array('value' => 'entertainmentBusiness',
		'expectedTypes' => array('EntertainmentBusiness')
	);

	/**
	 * Return the 'entertainmentBusiness' Property value
	 *
	 * @return	string
	 */
	public static function pEntertainmentBusiness()
	{
		return self::getValue(self::$entertainmentBusiness);
	}
}
