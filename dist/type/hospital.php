<?php
/**
 * A hospital.
 *
 * @see    http://schema.org/Hospital
*/
abstract class TypeHospital extends TypeCivicStructure
{
	/**
	 * The Schema.org Type Scope
	 *
	 * @var string
	 */
	protected static $scope = 'https://schema.org/Hospital';

	/**
	 * A medical service available from this provider.
	 * Expected Type: MedicalTherapy, MedicalProcedure, MedicalTest
	 * 
	 * @var	array
	 */
	protected static $availableService = array('value' => 'availableService',
		'expectedTypes' => array('MedicalTherapy', 'MedicalProcedure', 'MedicalTest')
	);

	/**
	 * A medical specialty of the provider.
	 * Expected Type: MedicalSpecialty
	 * 
	 * @var	array
	 */
	protected static $medicalSpecialty = array('value' => 'medicalSpecialty',
		'expectedTypes' => array('MedicalSpecialty')
	);

	/**
	 * Return the 'availableService' Property value
	 *
	 * @return	string
	 */
	public static function pAvailableService()
	{
		return self::getValue(self::$availableService);
	}

	/**
	 * Return the 'medicalSpecialty' Property value
	 *
	 * @return	string
	 */
	public static function pMedicalSpecialty()
	{
		return self::getValue(self::$medicalSpecialty);
	}
}
