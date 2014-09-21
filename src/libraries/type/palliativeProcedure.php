<?php
/**
 * A medical procedure intended primarily for palliative purposes, aimed at relieving the symptoms of an underlying health condition.
 *
 * @see    http://schema.org/PalliativeProcedure
*/
abstract class TypePalliativeProcedure extends TypeMedicalTherapy
{
	/**
	 * The Schema.org Type Scope
	 *
	 * @var string
	 */
	protected static $scope = 'https://schema.org/PalliativeProcedure';
}
