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
 * The act of forming a personal connection with someone/something (object) unidirectionally/asymmetrically to get updates polled from.Related actions:BefriendAction: Unlike BefriendAction, FollowAction implies that the connection is *not* necessarily reciprocal.SubscribeAction: Unlike SubscribeAction, FollowAction implies that the follower acts as an active agent constantly/actively polling for updates.RegisterAction: Unlike RegisterAction, FollowAction implies that the agent is interested in continuing receiving updates from the object.JoinAction: Unlike JoinAction, FollowAction implies that the agent is interested in getting updates from the object.TrackAction: Unlike TrackAction, FollowAction refers to the polling of updates of all aspects of animate objects rather than the location of inanimate objects (e.g. you track a package, but you don't follow it).
 *
 * @package     Joomla.Platform
 * @subpackage  Microdata
 *
 * @see         http://schema.org/FollowAction
 * @since       13.1
*/
abstract class TypeFollowAction extends TypeInteractAction
{
	/**
	 * The Schema.org Type Scope
	 *
	 * @var string
	 */
	protected static $scope = 'https://schema.org/FollowAction';

	/**
	 * A sub property of object. The person or organization being followed.
	 * Expected Type: Organization, Person
	 * 
	 * @var	array
	 */
	protected static $followee = array('value' => 'followee',
		'expectedTypes' => array('Organization', 'Person')
	);

	/**
	 * Return the 'followee' Property value
	 *
	 * @return	string
	 */
	public static function pFollowee()
	{
		return self::getValue(self::$followee);
	}
}
