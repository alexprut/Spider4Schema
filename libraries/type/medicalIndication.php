<?php
/**
 * A condition or factor that indicates use of a medical therapy, including signs, symptoms, risk factors, anatomical states, etc.
 *
 * @see    http://schema.org/MedicalIndication
 * @since  1.0
*/
abstract class TypeMedicalIndication extends TypeMedicalEntity
{
	/**
	 * The Schema.org Type Scope
	 *
	 * @var string
	 */
	protected static $scope = 'https://schema.org/MedicalIndication';
}
