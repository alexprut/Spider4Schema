<?php
/**
 * The legal availability status of a medical drug.
 *
 * @see    http://schema.org/DrugLegalStatus
*/
abstract class TypeDrugLegalStatus extends TypeMedicalIntangible
{
	/**
	 * The Schema.org Type Scope
	 *
	 * @var string
	 */
	protected static $scope = 'https://schema.org/DrugLegalStatus';

	/**
	 * The location in which the status applies.
	 * Expected Type: AdministrativeArea
	 * 
	 * @var	array
	 */
	protected static $applicableLocation = array('value' => 'applicableLocation',
		'expectedTypes' => array('AdministrativeArea')
	);

	/**
	 * Return the 'applicableLocation' Property value
	 *
	 * @return	string
	 */
	public static function pApplicableLocation()
	{
		return self::getValue(self::$applicableLocation);
	}
}
