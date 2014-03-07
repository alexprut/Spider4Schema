<?php
/**
 * Categories that represent an assessment of the risk of fetal injury due to a drug or pharmaceutical used as directed by the mother during pregnancy.
 *
 * @see    http://schema.org/DrugPregnancyCategory
*/
abstract class TypeDrugPregnancyCategory extends TypeMedicalEnumeration
{
	/**
	 * The Schema.org Type Scope
	 *
	 * @var string
	 */
	protected static $scope = 'https://schema.org/DrugPregnancyCategory';
}
