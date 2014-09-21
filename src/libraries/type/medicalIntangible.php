<?php
/**
 * A utility class that serves as the umbrella for a number of 'intangible' things in the medical space.
 *
 * @see    http://schema.org/MedicalIntangible
*/
abstract class TypeMedicalIntangible extends TypeMedicalEntity
{
	/**
	 * The Schema.org Type Scope
	 *
	 * @var string
	 */
	protected static $scope = 'https://schema.org/MedicalIntangible';
}
