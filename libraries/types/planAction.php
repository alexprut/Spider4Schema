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
 * The act of planning the execution of an event/task/action/reservation/plan to a future date.
 *
 * @package     Joomla.Platform
 * @subpackage  Microdata
 *
 * @see         http://schema.org/PlanAction
 * @since       13.1
*/
abstract class TypePlanAction extends TypeOrganizeAction
{
	/**
	 * The Schema.org Type Scope
	 *
	 * @var string
	 */
	protected static $scope = 'https://schema.org/PlanAction';

	/**
	 * The time the object is scheduled to.
	 * Expected Type: DateTime
	 * 
	 * @var	array
	 */
	protected static $scheduledTime = array('value' => 'scheduledTime',
		'expectedTypes' => array('DateTime')
	);

	/**
	 * Return the 'scheduledTime' Property value
	 *
	 * @return	string
	 */
	public static function pScheduledTime()
	{
		return self::getValue(self::$scheduledTime);
	}
}
