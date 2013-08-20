<?php
/**
 * A process of care involving exercise, changes to diet, fitness routines, and other lifestyle changes aimed at improving a health condition.
 *
 * @see    http://schema.org/LifestyleModification
 * @since  1.0
*/
abstract class TypeLifestyleModification extends TypeMedicalTherapy
{
	/**
	 * The Schema.org Type Scope
	 *
	 * @var string
	 */
	protected static $scope = 'https://schema.org/LifestyleModification';
}
