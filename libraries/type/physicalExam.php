<?php
/**
 * A type of physical examination of a patient performed by a physician. Enumerated type.
 *
 * @see    http://schema.org/PhysicalExam
 * @since  1.0
*/
abstract class TypePhysicalExam extends TypeMedicalEnumeration
{
	/**
	 * The Schema.org Type Scope
	 *
	 * @var string
	 */
	protected static $scope = 'https://schema.org/PhysicalExam';
}
