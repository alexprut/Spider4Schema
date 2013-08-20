<?php
/**
 * A medical procedure intended primarly for therapeutic purposes, aimed at improving a health condition.
 *
 * @see    http://schema.org/TherapeuticProcedure
 * @since  1.0
*/
abstract class TypeTherapeuticProcedure extends TypeMedicalProcedure
{
	/**
	 * The Schema.org Type Scope
	 *
	 * @var string
	 */
	protected static $scope = 'https://schema.org/TherapeuticProcedure';
}
