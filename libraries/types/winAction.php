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
 * The act of achieving victory in a competitive activity.
 *
 * @package     Joomla.Platform
 * @subpackage  Microdata
 *
 * @see         http://schema.org/WinAction
 * @since       13.1
*/
abstract class TypeWinAction extends TypeAchieveAction
{
	/**
	 * The Schema.org Type Scope
	 *
	 * @var string
	 */
	protected static $scope = 'https://schema.org/WinAction';

	/**
	 * A sub property of participant. The loser of the action.
	 * Expected Type: Person
	 * 
	 * @var	array
	 */
	protected static $loser = array('value' => 'loser',
		'expectedTypes' => array('Person')
	);

	/**
	 * Return the 'loser' Property value
	 *
	 * @return	string
	 */
	public static function pLoser()
	{
		return self::getValue(self::$loser);
	}
}
