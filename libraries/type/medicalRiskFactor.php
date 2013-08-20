<?php
/**
 * A risk factor is anything that increases a person's likelihood of developing or contracting a disease, medical condition, or complication.
 *
 * @see    http://schema.org/MedicalRiskFactor
 * @since  1.0
*/
abstract class TypeMedicalRiskFactor extends TypeMedicalEntity
{
	/**
	 * The Schema.org Type Scope
	 *
	 * @var string
	 */
	protected static $scope = 'https://schema.org/MedicalRiskFactor';

	/**
	 * The condition, complication, etc. influenced by this factor.
	 * Expected Type: MedicalEntity
	 * 
	 * @var	array
	 */
	protected static $increasesRiskOf = array('value' => 'increasesRiskOf',
		'expectedTypes' => array('MedicalEntity')
	);

	/**
	 * Return the 'increasesRiskOf' Property value
	 *
	 * @return	string
	 */
	public static function pIncreasesRiskOf()
	{
		return self::getValue(self::$increasesRiskOf);
	}
}
