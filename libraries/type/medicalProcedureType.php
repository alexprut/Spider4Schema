<?php
/**
 * An enumeration that describes different types of medical procedures.
 *
 * @see    http://schema.org/MedicalProcedureType
 * @since  1.0
*/
abstract class TypeMedicalProcedureType extends TypeMedicalEnumeration
{
	/**
	 * The Schema.org Type Scope
	 *
	 * @var string
	 */
	protected static $scope = 'https://schema.org/MedicalProcedureType';
}
