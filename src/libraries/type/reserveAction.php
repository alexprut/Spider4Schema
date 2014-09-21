<?php
/**
 * Reserving a concrete object.Related actions:ScheduleAction: Unlike ScheduleAction, ReserveAction reserves concrete objects (e.g. a table, a hotel) towards a time slot / spatial allocation.
 *
 * @see    http://schema.org/ReserveAction
*/
abstract class TypeReserveAction extends TypePlanAction
{
	/**
	 * The Schema.org Type Scope
	 *
	 * @var string
	 */
	protected static $scope = 'https://schema.org/ReserveAction';

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
