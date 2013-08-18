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
 * An agent approves/certifies/likes/supports/sanction an object.
 *
 * @package     Joomla.Platform
 * @subpackage  Microdata
 *
 * @see         http://schema.org/EndorseAction
 * @since       13.1
*/
abstract class TypeEndorseAction extends TypeReactAction
{
	/**
	 * The Schema.org Type Scope
	 *
	 * @var string
	 */
	protected static $scope = 'https://schema.org/EndorseAction';

	/**
	 * A sub property of participant. The person/organization being supported.
	 * Expected Type: Organization, Person
	 * 
	 * @var	array
	 */
	protected static $endorsee = array('value' => 'endorsee',
		'expectedTypes' => array('Organization', 'Person')
	);

	/**
	 * Return the 'endorsee' Property value
	 *
	 * @return	string
	 */
	public static function pEndorsee()
	{
		return self::getValue(self::$endorsee);
	}
}
