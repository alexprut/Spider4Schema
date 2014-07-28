<?php
/**
 * A medical procedure intended primarily for therapeutic purposes, aimed at improving a health condition.
 *
 * @see    http://schema.org/TherapeuticProcedure
*/
abstract class TypeTherapeuticProcedure extends TypeMedicalTherapy
{
	/**
	 * The Schema.org Type Scope
	 *
	 * @var string
	 */
	protected static $scope = 'https://schema.org/TherapeuticProcedure';
}
