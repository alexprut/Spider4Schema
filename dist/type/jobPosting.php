<?php
/**
 * A listing that describes a job opening in a certain organization.
 *
 * @see    http://schema.org/JobPosting
*/
abstract class TypeJobPosting extends TypeIntangible
{
	/**
	 * The Schema.org Type Scope
	 *
	 * @var string
	 */
	protected static $scope = 'https://schema.org/JobPosting';

	/**
	 * The base salary of the job or of an employee in an EmployeeRole.
	 * Expected Type: Number, PriceSpecification
	 * 
	 * @var	array
	 */
	protected static $baseSalary = array('value' => 'baseSalary',
		'expectedTypes' => array('Number', 'PriceSpecification')
	);

	/**
	 * Description of benefits associated with the job.
	 * Expected Type: Text
	 * 
	 * @var	array
	 */
	protected static $benefits = array('value' => 'benefits',
		'expectedTypes' => array('Text')
	);

	/**
	 * Publication date for the job posting.
	 * Expected Type: Date
	 * 
	 * @var	array
	 */
	protected static $datePosted = array('value' => 'datePosted',
		'expectedTypes' => array('Date')
	);

	/**
	 * Educational background needed for the position.
	 * Expected Type: Text
	 * 
	 * @var	array
	 */
	protected static $educationRequirements = array('value' => 'educationRequirements',
		'expectedTypes' => array('Text')
	);

	/**
	 * Type of employment (e.g. full-time, part-time, contract, temporary, seasonal, internship).
	 * Expected Type: Text
	 * 
	 * @var	array
	 */
	protected static $employmentType = array('value' => 'employmentType',
		'expectedTypes' => array('Text')
	);

	/**
	 * Description of skills and experience needed for the position.
	 * Expected Type: Text
	 * 
	 * @var	array
	 */
	protected static $experienceRequirements = array('value' => 'experienceRequirements',
		'expectedTypes' => array('Text')
	);

	/**
	 * Organization offering the job position.
	 * Expected Type: Organization
	 * 
	 * @var	array
	 */
	protected static $hiringOrganization = array('value' => 'hiringOrganization',
		'expectedTypes' => array('Organization')
	);

	/**
	 * Description of bonus and commission compensation aspects of the job.
	 * Expected Type: Text
	 * 
	 * @var	array
	 */
	protected static $incentives = array('value' => 'incentives',
		'expectedTypes' => array('Text')
	);

	/**
	 * The industry associated with the job position.
	 * Expected Type: Text
	 * 
	 * @var	array
	 */
	protected static $industry = array('value' => 'industry',
		'expectedTypes' => array('Text')
	);

	/**
	 * A (typically single) geographic location associated with the job position.
	 * Expected Type: Place
	 * 
	 * @var	array
	 */
	protected static $jobLocation = array('value' => 'jobLocation',
		'expectedTypes' => array('Place')
	);

	/**
	 * Category or categories describing the job. Use BLS O*NET-SOC taxonomy: http://www.onetcenter.org/taxonomy.html. Ideally includes textual label and formal code, with the property repeated for each applicable value.
	 * Expected Type: Text
	 * 
	 * @var	array
	 */
	protected static $occupationalCategory = array('value' => 'occupationalCategory',
		'expectedTypes' => array('Text')
	);

	/**
	 * Specific qualifications required for this role.
	 * Expected Type: Text
	 * 
	 * @var	array
	 */
	protected static $qualifications = array('value' => 'qualifications',
		'expectedTypes' => array('Text')
	);

	/**
	 * Responsibilities associated with this role.
	 * Expected Type: Text
	 * 
	 * @var	array
	 */
	protected static $responsibilities = array('value' => 'responsibilities',
		'expectedTypes' => array('Text')
	);

	/**
	 * The currency (coded using ISO 4217, http://en.wikipedia.org/wiki/ISO_4217 ) used for the main salary information in this job posting or for this employee.
	 * Expected Type: Text
	 * 
	 * @var	array
	 */
	protected static $salaryCurrency = array('value' => 'salaryCurrency',
		'expectedTypes' => array('Text')
	);

	/**
	 * Skills required to fulfill this role.
	 * Expected Type: Text
	 * 
	 * @var	array
	 */
	protected static $skills = array('value' => 'skills',
		'expectedTypes' => array('Text')
	);

	/**
	 * Any special commitments associated with this job posting. Valid entries include VeteranCommit, MilitarySpouseCommit, etc.
	 * Expected Type: Text
	 * 
	 * @var	array
	 */
	protected static $specialCommitments = array('value' => 'specialCommitments',
		'expectedTypes' => array('Text')
	);

	/**
	 * The title of the job.
	 * Expected Type: Text
	 * 
	 * @var	array
	 */
	protected static $title = array('value' => 'title',
		'expectedTypes' => array('Text')
	);

	/**
	 * The typical working hours for this job (e.g. 1st shift, night shift, 8am-5pm).
	 * Expected Type: Text
	 * 
	 * @var	array
	 */
	protected static $workHours = array('value' => 'workHours',
		'expectedTypes' => array('Text')
	);

	/**
	 * Return the 'baseSalary' Property value
	 *
	 * @return	string
	 */
	public static function pBaseSalary()
	{
		return self::getValue(self::$baseSalary);
	}

	/**
	 * Return the 'benefits' Property value
	 *
	 * @return	string
	 */
	public static function pBenefits()
	{
		return self::getValue(self::$benefits);
	}

	/**
	 * Return the 'datePosted' Property value
	 *
	 * @return	string
	 */
	public static function pDatePosted()
	{
		return self::getValue(self::$datePosted);
	}

	/**
	 * Return the 'educationRequirements' Property value
	 *
	 * @return	string
	 */
	public static function pEducationRequirements()
	{
		return self::getValue(self::$educationRequirements);
	}

	/**
	 * Return the 'employmentType' Property value
	 *
	 * @return	string
	 */
	public static function pEmploymentType()
	{
		return self::getValue(self::$employmentType);
	}

	/**
	 * Return the 'experienceRequirements' Property value
	 *
	 * @return	string
	 */
	public static function pExperienceRequirements()
	{
		return self::getValue(self::$experienceRequirements);
	}

	/**
	 * Return the 'hiringOrganization' Property value
	 *
	 * @return	string
	 */
	public static function pHiringOrganization()
	{
		return self::getValue(self::$hiringOrganization);
	}

	/**
	 * Return the 'incentives' Property value
	 *
	 * @return	string
	 */
	public static function pIncentives()
	{
		return self::getValue(self::$incentives);
	}

	/**
	 * Return the 'industry' Property value
	 *
	 * @return	string
	 */
	public static function pIndustry()
	{
		return self::getValue(self::$industry);
	}

	/**
	 * Return the 'jobLocation' Property value
	 *
	 * @return	string
	 */
	public static function pJobLocation()
	{
		return self::getValue(self::$jobLocation);
	}

	/**
	 * Return the 'occupationalCategory' Property value
	 *
	 * @return	string
	 */
	public static function pOccupationalCategory()
	{
		return self::getValue(self::$occupationalCategory);
	}

	/**
	 * Return the 'qualifications' Property value
	 *
	 * @return	string
	 */
	public static function pQualifications()
	{
		return self::getValue(self::$qualifications);
	}

	/**
	 * Return the 'responsibilities' Property value
	 *
	 * @return	string
	 */
	public static function pResponsibilities()
	{
		return self::getValue(self::$responsibilities);
	}

	/**
	 * Return the 'salaryCurrency' Property value
	 *
	 * @return	string
	 */
	public static function pSalaryCurrency()
	{
		return self::getValue(self::$salaryCurrency);
	}

	/**
	 * Return the 'skills' Property value
	 *
	 * @return	string
	 */
	public static function pSkills()
	{
		return self::getValue(self::$skills);
	}

	/**
	 * Return the 'specialCommitments' Property value
	 *
	 * @return	string
	 */
	public static function pSpecialCommitments()
	{
		return self::getValue(self::$specialCommitments);
	}

	/**
	 * Return the 'title' Property value
	 *
	 * @return	string
	 */
	public static function pTitle()
	{
		return self::getValue(self::$title);
	}

	/**
	 * Return the 'workHours' Property value
	 *
	 * @return	string
	 */
	public static function pWorkHours()
	{
		return self::getValue(self::$workHours);
	}
}
