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
 * The act of editing a recipient by replacing an old object with a new object.
 *
 * @package     Joomla.Platform
 * @subpackage  Microdata
 *
 * @see         http://schema.org/ReplaceAction
 * @since       13.1
*/
abstract class TypeReplaceAction extends TypeUpdateAction
{
	/**
	 * The Schema.org Type Scope
	 *
	 * @var string
	 */
	protected static $scope = 'https://schema.org/ReplaceAction';

	/**
	 * A sub property of object. The object that is being replaced.
	 * Expected Type: Thing
	 * 
	 * @var	array
	 */
	protected static $replacee = array('value' => 'replacee',
		'expectedTypes' => array('Thing')
	);

	/**
	 * A sub property of object. The object that replaces.
	 * Expected Type: Thing
	 * 
	 * @var	array
	 */
	protected static $replacer = array('value' => 'replacer',
		'expectedTypes' => array('Thing')
	);

	/**
	 * Return the 'replacee' Property value
	 *
	 * @return	string
	 */
	public static function pReplacee()
	{
		return self::getValue(self::$replacee);
	}

	/**
	 * Return the 'replacer' Property value
	 *
	 * @return	string
	 */
	public static function pReplacer()
	{
		return self::getValue(self::$replacer);
	}
}
