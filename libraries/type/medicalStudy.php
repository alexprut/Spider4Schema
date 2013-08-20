<?php
/**
 * A medical study is an umbrella type covering all kinds of research studies relating to human medicine or health, including observational studies and interventional trials and registries, randomized, controlled or not. When the specific type of study is known, use one of the extensions of this type, such as MedicalTrial or MedicalObservationalStudy. Also, note that this type should be used to mark up data that describes the study itself; to tag an article that publishes the results of a study, use MedicalScholarlyArticle. Note: use the code property of MedicalEntity to store study IDs, e.g. clinicaltrials.gov ID.
 *
 * @see    http://schema.org/MedicalStudy
 * @since  1.0
*/
abstract class TypeMedicalStudy extends TypeMedicalEntity
{
	/**
	 * The Schema.org Type Scope
	 *
	 * @var string
	 */
	protected static $scope = 'https://schema.org/MedicalStudy';

	/**
	 * Expected or actual outcomes of the study.
	 * Expected Type: Text
	 * 
	 * @var	array
	 */
	protected static $outcome = array('value' => 'outcome',
		'expectedTypes' => array('Text')
	);

	/**
	 * Any characteristics of the population used in the study, e.g. 'males under 65'.
	 * Expected Type: Text
	 * 
	 * @var	array
	 */
	protected static $population = array('value' => 'population',
		'expectedTypes' => array('Text')
	);

	/**
	 * Sponsor of the study.
	 * Expected Type: Organization
	 * 
	 * @var	array
	 */
	protected static $sponsor = array('value' => 'sponsor',
		'expectedTypes' => array('Organization')
	);

	/**
	 * The status of the study (enumerated).
	 * Expected Type: MedicalStudyStatus
	 * 
	 * @var	array
	 */
	protected static $status = array('value' => 'status',
		'expectedTypes' => array('MedicalStudyStatus')
	);

	/**
	 * The location in which the study is taking/took place.
	 * Expected Type: AdministrativeArea
	 * 
	 * @var	array
	 */
	protected static $studyLocation = array('value' => 'studyLocation',
		'expectedTypes' => array('AdministrativeArea')
	);

	/**
	 * A subject of the study, i.e. one of the medical conditions, therapies, devices, drugs, etc. investigated by the study.
	 * Expected Type: MedicalEntity
	 * 
	 * @var	array
	 */
	protected static $studySubject = array('value' => 'studySubject',
		'expectedTypes' => array('MedicalEntity')
	);

	/**
	 * Return the 'outcome' Property value
	 *
	 * @return	string
	 */
	public static function pOutcome()
	{
		return self::getValue(self::$outcome);
	}

	/**
	 * Return the 'population' Property value
	 *
	 * @return	string
	 */
	public static function pPopulation()
	{
		return self::getValue(self::$population);
	}

	/**
	 * Return the 'sponsor' Property value
	 *
	 * @return	string
	 */
	public static function pSponsor()
	{
		return self::getValue(self::$sponsor);
	}

	/**
	 * Return the 'status' Property value
	 *
	 * @return	string
	 */
	public static function pStatus()
	{
		return self::getValue(self::$status);
	}

	/**
	 * Return the 'studyLocation' Property value
	 *
	 * @return	string
	 */
	public static function pStudyLocation()
	{
		return self::getValue(self::$studyLocation);
	}

	/**
	 * Return the 'studySubject' Property value
	 *
	 * @return	string
	 */
	public static function pStudySubject()
	{
		return self::getValue(self::$studySubject);
	}
}
