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
 * The act of expressing a preference from a fixed/finite/structured set of choices/options.
 *
 * @package     Joomla.Platform
 * @subpackage  Microdata
 *
 * @see         http://schema.org/VoteAction
 * @since       13.1
*/
abstract class TypeVoteAction extends TypeChooseAction
{
	/**
	 * The Schema.org Type Scope
	 *
	 * @var string
	 */
	protected static $scope = 'https://schema.org/VoteAction';

	/**
	 * A sub property of object. The candidate subject of this action.
	 * Expected Type: Person
	 * 
	 * @var	array
	 */
	protected static $candidate = array('value' => 'candidate',
		'expectedTypes' => array('Person')
	);

	/**
	 * Return the 'candidate' Property value
	 *
	 * @return	string
	 */
	public static function pCandidate()
	{
		return self::getValue(self::$candidate);
	}
}
