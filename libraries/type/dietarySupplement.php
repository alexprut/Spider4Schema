<?php
/**
 * A product taken by mouth that contains a dietary ingredient intended to supplement the diet. Dietary ingredients may include vitamins, minerals, herbs or other botanicals, amino acids, and substances such as enzymes, organ tissues, glandulars and metabolites.
 *
 * @see    http://schema.org/DietarySupplement
*/
abstract class TypeDietarySupplement extends TypeMedicalTherapy
{
	/**
	 * The Schema.org Type Scope
	 *
	 * @var string
	 */
	protected static $scope = 'https://schema.org/DietarySupplement';

	/**
	 * An active ingredient, typically chemical compounds and/or biologic substances.
	 * Expected Type: Text
	 * 
	 * @var	array
	 */
	protected static $activeIngredient = array('value' => 'activeIngredient',
		'expectedTypes' => array('Text')
	);

	/**
	 * Descriptive information establishing a historical perspective on the supplement. May include the rationale for the name, the population where the supplement first came to prominence, etc.
	 * Expected Type: Text
	 * 
	 * @var	array
	 */
	protected static $background = array('value' => 'background',
		'expectedTypes' => array('Text')
	);

	/**
	 * A dosage form in which this drug/supplement is available, e.g. 'tablet', 'suspension', 'injection'.
	 * Expected Type: Text
	 * 
	 * @var	array
	 */
	protected static $dosageForm = array('value' => 'dosageForm',
		'expectedTypes' => array('Text')
	);

	/**
	 * True if this item's name is a proprietary/brand name (vs. generic name).
	 * Expected Type: Boolean
	 * 
	 * @var	array
	 */
	protected static $isProprietary = array('value' => 'isProprietary',
		'expectedTypes' => array('Boolean')
	);

	/**
	 * The drug or supplement's legal status, including any controlled substance schedules that apply.
	 * Expected Type: DrugLegalStatus
	 * 
	 * @var	array
	 */
	protected static $legalStatus = array('value' => 'legalStatus',
		'expectedTypes' => array('DrugLegalStatus')
	);

	/**
	 * The manufacturer of the product.
	 * Expected Type: Organization
	 * 
	 * @var	array
	 */
	protected static $manufacturer = array('value' => 'manufacturer',
		'expectedTypes' => array('Organization')
	);

	/**
	 * Recommended intake of this supplement for a given population as defined by a specific recommending authority.
	 * Expected Type: MaximumDoseSchedule
	 * 
	 * @var	array
	 */
	protected static $maximumIntake = array('value' => 'maximumIntake',
		'expectedTypes' => array('MaximumDoseSchedule')
	);

	/**
	 * The specific biochemical interaction through which this drug or supplement produces its pharmacological effect.
	 * Expected Type: Text
	 * 
	 * @var	array
	 */
	protected static $mechanismOfAction = array('value' => 'mechanismOfAction',
		'expectedTypes' => array('Text')
	);

	/**
	 * The generic name of this drug or supplement.
	 * Expected Type: Text
	 * 
	 * @var	array
	 */
	protected static $nonProprietaryName = array('value' => 'nonProprietaryName',
		'expectedTypes' => array('Text')
	);

	/**
	 * Recommended intake of this supplement for a given population as defined by a specific recommending authority.
	 * Expected Type: RecommendedDoseSchedule
	 * 
	 * @var	array
	 */
	protected static $recommendedIntake = array('value' => 'recommendedIntake',
		'expectedTypes' => array('RecommendedDoseSchedule')
	);

	/**
	 * Any potential safety concern associated with the supplement. May include interactions with other drugs and foods, pregnancy, breastfeeding, known adverse reactions, and documented efficacy of the supplement.
	 * Expected Type: Text
	 * 
	 * @var	array
	 */
	protected static $safetyConsideration = array('value' => 'safetyConsideration',
		'expectedTypes' => array('Text')
	);

	/**
	 * Characteristics of the population for which this is intended, or which typically uses it, e.g. 'adults'.
	 * Expected Type: Text
	 * 
	 * @var	array
	 */
	protected static $targetPopulation = array('value' => 'targetPopulation',
		'expectedTypes' => array('Text')
	);

	/**
	 * Return the 'activeIngredient' Property value
	 *
	 * @return	string
	 */
	public static function pActiveIngredient()
	{
		return self::getValue(self::$activeIngredient);
	}

	/**
	 * Return the 'background' Property value
	 *
	 * @return	string
	 */
	public static function pBackground()
	{
		return self::getValue(self::$background);
	}

	/**
	 * Return the 'dosageForm' Property value
	 *
	 * @return	string
	 */
	public static function pDosageForm()
	{
		return self::getValue(self::$dosageForm);
	}

	/**
	 * Return the 'isProprietary' Property value
	 *
	 * @return	string
	 */
	public static function pIsProprietary()
	{
		return self::getValue(self::$isProprietary);
	}

	/**
	 * Return the 'legalStatus' Property value
	 *
	 * @return	string
	 */
	public static function pLegalStatus()
	{
		return self::getValue(self::$legalStatus);
	}

	/**
	 * Return the 'manufacturer' Property value
	 *
	 * @return	string
	 */
	public static function pManufacturer()
	{
		return self::getValue(self::$manufacturer);
	}

	/**
	 * Return the 'maximumIntake' Property value
	 *
	 * @return	string
	 */
	public static function pMaximumIntake()
	{
		return self::getValue(self::$maximumIntake);
	}

	/**
	 * Return the 'mechanismOfAction' Property value
	 *
	 * @return	string
	 */
	public static function pMechanismOfAction()
	{
		return self::getValue(self::$mechanismOfAction);
	}

	/**
	 * Return the 'nonProprietaryName' Property value
	 *
	 * @return	string
	 */
	public static function pNonProprietaryName()
	{
		return self::getValue(self::$nonProprietaryName);
	}

	/**
	 * Return the 'recommendedIntake' Property value
	 *
	 * @return	string
	 */
	public static function pRecommendedIntake()
	{
		return self::getValue(self::$recommendedIntake);
	}

	/**
	 * Return the 'safetyConsideration' Property value
	 *
	 * @return	string
	 */
	public static function pSafetyConsideration()
	{
		return self::getValue(self::$safetyConsideration);
	}

	/**
	 * Return the 'targetPopulation' Property value
	 *
	 * @return	string
	 */
	public static function pTargetPopulation()
	{
		return self::getValue(self::$targetPopulation);
	}
}
