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
 * An action performed by a direct agent and indirect     participants upon a direct object. Optionally happens at a location     with the help of an inanimate instrument. The execution of the action     may produce a result. Specific action sub-type documentation specifies     the exact expectation of each argument/role.
 *
 * @package     Joomla.Platform
 * @subpackage  Microdata
 *
 * @see         http://schema.org/Action
 * @since       13.1
*/
abstract class TypeAction extends TypeThing
{
	/**
	 * The Schema.org Type Scope
	 *
	 * @var string
	 */
	protected static $scope = 'https://schema.org/Action';

	/**
	 * The direct performer or driver of the action (animate or inanimate). e.g. *John* wrote a book.
	 * Expected Type: Organization, Person
	 * 
	 * @var	array
	 */
	protected static $agent = array('value' => 'agent',
		'expectedTypes' => array('Organization', 'Person')
	);

	/**
	 * When the Action was performed: end time. This is for actions that span a period of time. e.g. John wrote a book from January to *December*.
	 * Expected Type: DateTime
	 * 
	 * @var	array
	 */
	protected static $endTime = array('value' => 'endTime',
		'expectedTypes' => array('DateTime')
	);

	/**
	 * The object that helped the agent perform the action. e.g. John wrote a book with *a pen*.
	 * Expected Type: Thing
	 * 
	 * @var	array
	 */
	protected static $instrument = array('value' => 'instrument',
		'expectedTypes' => array('Thing')
	);

	/**
	 * The location of the event, organization or action.
	 * Expected Type: Place, PostalAddress
	 * 
	 * @var	array
	 */
	protected static $location = array('value' => 'location',
		'expectedTypes' => array('Place', 'PostalAddress')
	);

	/**
	 * The object upon the action is carried out, whose state is kept intact or changed. Also known as the semantic roles patient, affected or undergoer (which change their state) or theme (which doesn't). e.g. John read *a book*.
	 * Expected Type: Thing
	 * 
	 * @var	array
	 */
	protected static $object = array('value' => 'object',
		'expectedTypes' => array('Thing')
	);

	/**
	 * Other co-agents that participated in the action indirectly. e.g. John wrote a book with *Steve*.
	 * Expected Type: Organization, Person
	 * 
	 * @var	array
	 */
	protected static $participant = array('value' => 'participant',
		'expectedTypes' => array('Organization', 'Person')
	);

	/**
	 * The result produced in the action. e.g. John wrote *a book*.
	 * Expected Type: Thing
	 * 
	 * @var	array
	 */
	protected static $result = array('value' => 'result',
		'expectedTypes' => array('Thing')
	);

	/**
	 * When the Action was performed: start time. This is for actions that span a period of time. e.g. John wrote a book from *January* to December.
	 * Expected Type: DateTime
	 * 
	 * @var	array
	 */
	protected static $startTime = array('value' => 'startTime',
		'expectedTypes' => array('DateTime')
	);

	/**
	 * Return the 'agent' Property value
	 *
	 * @return	string
	 */
	public static function pAgent()
	{
		return self::getValue(self::$agent);
	}

	/**
	 * Return the 'endTime' Property value
	 *
	 * @return	string
	 */
	public static function pEndTime()
	{
		return self::getValue(self::$endTime);
	}

	/**
	 * Return the 'instrument' Property value
	 *
	 * @return	string
	 */
	public static function pInstrument()
	{
		return self::getValue(self::$instrument);
	}

	/**
	 * Return the 'location' Property value
	 *
	 * @return	string
	 */
	public static function pLocation()
	{
		return self::getValue(self::$location);
	}

	/**
	 * Return the 'object' Property value
	 *
	 * @return	string
	 */
	public static function pObject()
	{
		return self::getValue(self::$object);
	}

	/**
	 * Return the 'participant' Property value
	 *
	 * @return	string
	 */
	public static function pParticipant()
	{
		return self::getValue(self::$participant);
	}

	/**
	 * Return the 'result' Property value
	 *
	 * @return	string
	 */
	public static function pResult()
	{
		return self::getValue(self::$result);
	}

	/**
	 * Return the 'startTime' Property value
	 *
	 * @return	string
	 */
	public static function pStartTime()
	{
		return self::getValue(self::$startTime);
	}
}
