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
 * The act of authoring written creative content.
 *
 * @package     Joomla.Platform
 * @subpackage  Microdata
 *
 * @see         http://schema.org/WriteAction
 * @since       13.1
*/
abstract class TypeWriteAction extends TypeCreateAction
{
	/**
	 * The Schema.org Type Scope
	 *
	 * @var string
	 */
	protected static $scope = 'https://schema.org/WriteAction';

	/**
	 * A sub property of instrument. The languaged used on this action.
	 * Expected Type: Language
	 * 
	 * @var	array
	 */
	protected static $language = array('value' => 'language',
		'expectedTypes' => array('Language')
	);

	/**
	 * Return the 'language' Property value
	 *
	 * @return	string
	 */
	public static function pLanguage()
	{
		return self::getValue(self::$language);
	}
}
