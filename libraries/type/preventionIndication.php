<?php
/**
 * An indication for preventing an underlying condition, symptom, etc.
 *
 * @see    http://schema.org/PreventionIndication
 * @since  1.0
*/
abstract class TypePreventionIndication extends TypeMedicalIndication
{
	/**
	 * The Schema.org Type Scope
	 *
	 * @var string
	 */
	protected static $scope = 'https://schema.org/PreventionIndication';
}
