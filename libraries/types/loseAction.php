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
 * The act of being defeated in a competitive activity.
 *
 * @package     Joomla.Platform
 * @subpackage  Microdata
 *
 * @see         http://schema.org/LoseAction
 * @since       13.1
*/
abstract class TypeLoseAction extends TypeAchieveAction
{
	/**
	 * The Schema.org Type Scope
	 *
	 * @var string
	 */
	protected static $scope = 'https://schema.org/LoseAction';

	/**
	 * A sub property of participant. The winner of the action.
	 * Expected Type: Person
	 * 
	 * @var	array
	 */
	protected static $winner = array('value' => 'winner',
		'expectedTypes' => array('Person')
	);

	/**
	 * Return the 'winner' Property value
	 *
	 * @return	string
	 */
	public static function pWinner()
	{
		return self::getValue(self::$winner);
	}
}
