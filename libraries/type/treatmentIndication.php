<?php
/**
 * An indication for treating an underlying condition, symptom, etc.
 *
 * @see    http://schema.org/TreatmentIndication
 * @since  1.0
*/
abstract class TypeTreatmentIndication extends TypeMedicalIndication
{
	/**
	 * The Schema.org Type Scope
	 *
	 * @var string
	 */
	protected static $scope = 'https://schema.org/TreatmentIndication';
}
