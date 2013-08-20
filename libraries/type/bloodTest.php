<?php
/**
 * A medical test performed on a sample of a patient's blood.
 *
 * @see    http://schema.org/BloodTest
 * @since  1.0
*/
abstract class TypeBloodTest extends TypeMedicalTest
{
	/**
	 * The Schema.org Type Scope
	 *
	 * @var string
	 */
	protected static $scope = 'https://schema.org/BloodTest';
}
