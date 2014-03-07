<?php
/**
 * Scheduling future actions, events, or tasks.Related actions:ReserveAction: Unlike ReserveAction, ScheduleAction allocates future actions (e.g. an event, a task, etc) towards a time slot / spatial allocation.
 *
 * @see    http://schema.org/ScheduleAction
*/
abstract class TypeScheduleAction extends TypePlanAction
{
	/**
	 * The Schema.org Type Scope
	 *
	 * @var string
	 */
	protected static $scope = 'https://schema.org/ScheduleAction';
}
