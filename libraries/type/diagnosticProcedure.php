<?php
/**
 * A medical procedure intended primarly for diagnostic, as opposed to therapeutic, purposes.
 *
 * @see    http://schema.org/DiagnosticProcedure
 * @since  1.0
*/
abstract class TypeDiagnosticProcedure extends TypeMedicalProcedure
{
	/**
	 * The Schema.org Type Scope
	 *
	 * @var string
	 */
	protected static $scope = 'https://schema.org/DiagnosticProcedure';
}
