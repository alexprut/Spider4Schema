<?php
/**
 * An enumeration that describes different types of medical procedures.
 *
 * @see    http://schema.org/MedicalProcedureType
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
