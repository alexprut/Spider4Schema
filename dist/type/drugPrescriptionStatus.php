<?php
/**
 * Indicates whether this drug is available by prescription or over-the-counter.
 *
 * @see    http://schema.org/DrugPrescriptionStatus
*/
abstract class TypeDrugPrescriptionStatus extends TypeEnumeration
{
	/**
	 * The Schema.org Type Scope
	 *
	 * @var string
	 */
	protected static $scope = 'https://schema.org/DrugPrescriptionStatus';
}
