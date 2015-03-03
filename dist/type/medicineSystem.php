<?php
/**
 * Systems of medical practice.
 *
 * @see    http://schema.org/MedicineSystem
*/
abstract class TypeMedicineSystem extends TypeEnumeration
{
	/**
	 * The Schema.org Type Scope
	 *
	 * @var string
	 */
	protected static $scope = 'https://schema.org/MedicineSystem';
}
