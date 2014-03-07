<?php
/**
 * The most generic type of entity related to health and the practice of medicine.
 *
 * @see    http://schema.org/MedicalEntity
*/
abstract class TypeMedicalEntity extends TypeThing
{
	/**
	 * The Schema.org Type Scope
	 *
	 * @var string
	 */
	protected static $scope = 'https://schema.org/MedicalEntity';

	/**
	 * A medical code for the entity, taken from a controlled vocabulary or ontology such as ICD-9, DiseasesDB, MeSH, SNOMED-CT, RxNorm, etc.
	 * Expected Type: MedicalCode
	 * 
	 * @var	array
	 */
	protected static $code = array('value' => 'code',
		'expectedTypes' => array('MedicalCode')
	);

	/**
	 * A medical guideline related to this entity.
	 * Expected Type: MedicalGuideline
	 * 
	 * @var	array
	 */
	protected static $guideline = array('value' => 'guideline',
		'expectedTypes' => array('MedicalGuideline')
	);

	/**
	 * The system of medicine that includes this MedicalEntity, for example 'evidence-based', 'homeopathic', 'chiropractic', etc.
	 * Expected Type: MedicineSystem
	 * 
	 * @var	array
	 */
	protected static $medicineSystem = array('value' => 'medicineSystem',
		'expectedTypes' => array('MedicineSystem')
	);

	/**
	 * If applicable, the organization that officially recognizes this entity as part of its endorsed system of medicine.
	 * Expected Type: Organization
	 * 
	 * @var	array
	 */
	protected static $recognizingAuthority = array('value' => 'recognizingAuthority',
		'expectedTypes' => array('Organization')
	);

	/**
	 * If applicable, a medical specialty in which this entity is relevant.
	 * Expected Type: MedicalSpecialty
	 * 
	 * @var	array
	 */
	protected static $relevantSpecialty = array('value' => 'relevantSpecialty',
		'expectedTypes' => array('MedicalSpecialty')
	);

	/**
	 * A medical study or trial related to this entity.
	 * Expected Type: MedicalStudy
	 * 
	 * @var	array
	 */
	protected static $study = array('value' => 'study',
		'expectedTypes' => array('MedicalStudy')
	);

	/**
	 * Return the 'code' Property value
	 *
	 * @return	string
	 */
	public static function pCode()
	{
		return self::getValue(self::$code);
	}

	/**
	 * Return the 'guideline' Property value
	 *
	 * @return	string
	 */
	public static function pGuideline()
	{
		return self::getValue(self::$guideline);
	}

	/**
	 * Return the 'medicineSystem' Property value
	 *
	 * @return	string
	 */
	public static function pMedicineSystem()
	{
		return self::getValue(self::$medicineSystem);
	}

	/**
	 * Return the 'recognizingAuthority' Property value
	 *
	 * @return	string
	 */
	public static function pRecognizingAuthority()
	{
		return self::getValue(self::$recognizingAuthority);
	}

	/**
	 * Return the 'relevantSpecialty' Property value
	 *
	 * @return	string
	 */
	public static function pRelevantSpecialty()
	{
		return self::getValue(self::$relevantSpecialty);
	}

	/**
	 * Return the 'study' Property value
	 *
	 * @return	string
	 */
	public static function pStudy()
	{
		return self::getValue(self::$study);
	}
}
