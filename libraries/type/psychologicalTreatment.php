<?php
/**
 * A process of care relying upon counseling, dialogue, communication, verbalization aimed at improving a mental health condition.
 *
 * @see    http://schema.org/PsychologicalTreatment
 * @since  1.0
*/
abstract class TypePsychologicalTreatment extends TypeMedicalTherapy
{
	/**
	 * The Schema.org Type Scope
	 *
	 * @var string
	 */
	protected static $scope = 'https://schema.org/PsychologicalTreatment';
}
