<?php
/**
 * Enumerated categories of medical drug costs.
 *
 * @see    http://schema.org/DrugCostCategory
 * @since  1.0
*/
abstract class TypeDrugCostCategory extends TypeMedicalEnumeration
{
	/**
	 * The Schema.org Type Scope
	 *
	 * @var string
	 */
	protected static $scope = 'https://schema.org/DrugCostCategory';
}
