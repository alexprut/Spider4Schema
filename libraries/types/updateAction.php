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
 * The act of managing by changing/editing the state of the object.
 *
 * @package     Joomla.Platform
 * @subpackage  Microdata
 *
 * @see         http://schema.org/UpdateAction
 * @since       13.1
*/
abstract class TypeUpdateAction extends TypeAction
{
	/**
	 * The Schema.org Type Scope
	 *
	 * @var string
	 */
	protected static $scope = 'https://schema.org/UpdateAction';

	/**
	 * A sub property of object. The collection target of the action.
	 * Expected Type: Thing
	 * 
	 * @var	array
	 */
	protected static $collection = array('value' => 'collection',
		'expectedTypes' => array('Thing')
	);

	/**
	 * Return the 'collection' Property value
	 *
	 * @return	string
	 */
	public static function pCollection()
	{
		return self::getValue(self::$collection);
	}
}
