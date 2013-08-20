<?php
/**
 * A patient-reported or observed dosing schedule for a drug or supplement.
 *
 * @see    http://schema.org/ReportedDoseSchedule
 * @since  1.0
*/
abstract class TypeReportedDoseSchedule extends TypeDoseSchedule
{
	/**
	 * The Schema.org Type Scope
	 *
	 * @var string
	 */
	protected static $scope = 'https://schema.org/ReportedDoseSchedule';
}
