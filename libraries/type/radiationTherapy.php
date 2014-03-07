<?php
/**
 * A process of care using radiation aimed at improving a health condition.
 *
 * @see    http://schema.org/RadiationTherapy
*/
abstract class TypeRadiationTherapy extends TypeMedicalTherapy
{
	/**
	 * The Schema.org Type Scope
	 *
	 * @var string
	 */
	protected static $scope = 'https://schema.org/RadiationTherapy';
}
