<?php
/**
 * A medical clinic.
 *
 * @see    http://schema.org/MedicalClinic
*/
abstract class TypeMedicalClinic extends TypeMedicalOrganization
{
	/**
	 * The Schema.org Type Scope
	 *
	 * @var string
	 */
	protected static $scope = 'https://schema.org/MedicalClinic';

	/**
	 * A medical service available from this provider.
	 * Expected Type: MedicalTest, MedicalTherapy, MedicalProcedure
	 * 
	 * @var	array
	 */
	protected static $availableService = array('value' => 'availableService',
		'expectedTypes' => array('MedicalTest', 'MedicalTherapy', 'MedicalProcedure')
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
