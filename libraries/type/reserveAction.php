<?php
/**
 * Reserving a concrete object.Related actions:ScheduleAction: Unlike ScheduleAction, ReserveAction reserves concrete objects (e.g. a table, a hotel) towards a time slot / spatial allocation.
 *
 * @see    http://schema.org/ReserveAction
 * @since  1.0
*/
abstract class TypeReserveAction extends TypePlanAction
{
	/**
	 * The Schema.org Type Scope
	 *
	 * @var string
	 */
	protected static $scope = 'https://schema.org/ReserveAction';
}
