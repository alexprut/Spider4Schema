<?php
/**
 * The act of planning the execution of an event/task/action/reservation/plan to a future date.
 *
 * @see    http://schema.org/PlanAction
 * @since  1.0
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
