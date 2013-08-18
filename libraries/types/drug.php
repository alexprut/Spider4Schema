<?php
/**
 * @package     Joomla.Platform
 * @subpackage  Microdata
 *
 * @copyright   Copyright (C) 2005 - 2013 Open Source Matters, Inc. All rights reserved.
 * @license     GNU General Public License version 2 or later; see LICENSE
 */

defined("JPATH_PLATFORM") or die;

/**
 * A chemical or biologic substance, used as a medical therapy, that has a physiological effect on an organism.
 *
 * @package     Joomla.Platform
 * @subpackage  Microdata
 *
 * @see         http://schema.org/Drug
 * @since       13.1
*/
abstract class TypeDrug extends TypeMedicalTherapy
{
	/**
	 * The Schema.org Type Scope
	 *
	 * @var string
	 */
	protected static $scope = 'https://schema.org/Drug';

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
	 * A route by which this drug may be administered, e.g. 'oral'.
	 * Expected Type: Text
	 * 
	 * @var	array
	 */
	protected static $administrationRoute = array('value' => 'administrationRoute',
		'expectedTypes' => array('Text')
	);

	/**
	 * Any precaution, guidance, contraindication, etc. related to consumption of alcohol while taking this drug.
	 * Expected Type: Text
	 * 
	 * @var	array
	 */
	protected static $alcoholWarning = array('value' => 'alcoholWarning',
		'expectedTypes' => array('Text')
	);

	/**
	 * An available dosage strength for the drug.
	 * Expected Type: DrugStrength
	 * 
	 * @var	array
	 */
	protected static $availableStrength = array('value' => 'availableStrength',
		'expectedTypes' => array('DrugStrength')
	);

	/**
	 * Any precaution, guidance, contraindication, etc. related to this drug's use by breastfeeding mothers.
	 * Expected Type: Text
	 * 
	 * @var	array
	 */
	protected static $breastfeedingWarning = array('value' => 'breastfeedingWarning',
		'expectedTypes' => array('Text')
	);

	/**
	 * Description of the absorption and elimination of drugs, including their concentration (pharmacokinetics, pK) and biological effects (pharmacodynamics, pD).
	 * Expected Type: Text
	 * 
	 * @var	array
	 */
	protected static $clincalPharmacology = array('value' => 'clincalPharmacology',
		'expectedTypes' => array('Text')
	);

	/**
	 * Cost per unit of the drug, as reported by the source being tagged.
	 * Expected Type: DrugCost
	 * 
	 * @var	array
	 */
	protected static $cost = array('value' => 'cost',
		'expectedTypes' => array('DrugCost')
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
	 * A dosing schedule for the drug for a given population, either observed, recommended, or maximum dose based on the type used.
	 * Expected Type: DoseSchedule
	 * 
	 * @var	array
	 */
	protected static $doseSchedule = array('value' => 'doseSchedule',
		'expectedTypes' => array('DoseSchedule')
	);

	/**
	 * The class of drug this belongs to (e.g., statins).
	 * Expected Type: DrugClass
	 * 
	 * @var	array
	 */
	protected static $drugClass = array('value' => 'drugClass',
		'expectedTypes' => array('DrugClass')
	);

	/**
	 * Any precaution, guidance, contraindication, etc. related to consumption of specific foods while taking this drug.
	 * Expected Type: Text
	 * 
	 * @var	array
	 */
	protected static $foodWarning = array('value' => 'foodWarning',
		'expectedTypes' => array('Text')
	);

	/**
	 * Another drug that is known to interact with this drug in a way that impacts the effect of this drug or causes a risk to the patient. Note: disease interactions are typically captured as contraindications.
	 * Expected Type: Drug
	 * 
	 * @var	array
	 */
	protected static $interactingDrug = array('value' => 'interactingDrug',
		'expectedTypes' => array('Drug')
	);

	/**
	 * True if the drug is available in a generic form (regardless of name).
	 * Expected Type: Boolean
	 * 
	 * @var	array
	 */
	protected static $isAvailableGenerically = array('value' => 'isAvailableGenerically',
		'expectedTypes' => array('Boolean')
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
	 * Link to the drug's label details.
	 * Expected Type: URL
	 * 
	 * @var	array
	 */
	protected static $labelDetails = array('value' => 'labelDetails',
		'expectedTypes' => array('URL')
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
	 * Any information related to overdose on a drug, including signs or symptoms, treatments, contact information for emergency response.
	 * Expected Type: Text
	 * 
	 * @var	array
	 */
	protected static $overdosage = array('value' => 'overdosage',
		'expectedTypes' => array('Text')
	);

	/**
	 * Pregnancy category of this drug.
	 * Expected Type: DrugPregnancyCategory
	 * 
	 * @var	array
	 */
	protected static $pregnancyCategory = array('value' => 'pregnancyCategory',
		'expectedTypes' => array('DrugPregnancyCategory')
	);

	/**
	 * Any precaution, guidance, contraindication, etc. related to this drug's use during pregnancy.
	 * Expected Type: Text
	 * 
	 * @var	array
	 */
	protected static $pregnancyWarning = array('value' => 'pregnancyWarning',
		'expectedTypes' => array('Text')
	);

	/**
	 * Link to prescribing information for the drug.
	 * Expected Type: URL
	 * 
	 * @var	array
	 */
	protected static $prescribingInfo = array('value' => 'prescribingInfo',
		'expectedTypes' => array('URL')
	);

	/**
	 * Indicates whether this drug is available by prescription or over-the-counter.
	 * Expected Type: DrugPrescriptionStatus
	 * 
	 * @var	array
	 */
	protected static $prescriptionStatus = array('value' => 'prescriptionStatus',
		'expectedTypes' => array('DrugPrescriptionStatus')
	);

	/**
	 * Any other drug related to this one, for example commonly-prescribed alternatives.
	 * Expected Type: Drug
	 * 
	 * @var	array
	 */
	protected static $relatedDrug = array('value' => 'relatedDrug',
		'expectedTypes' => array('Drug')
	);

	/**
	 * Any FDA or other warnings about the drug (text or URL).
	 * Expected Type: Text, URL
	 * 
	 * @var	array
	 */
	protected static $warning = array('value' => 'warning',
		'expectedTypes' => array('Text', 'URL')
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
	 * Return the 'administrationRoute' Property value
	 *
	 * @return	string
	 */
	public static function pAdministrationRoute()
	{
		return self::getValue(self::$administrationRoute);
	}

	/**
	 * Return the 'alcoholWarning' Property value
	 *
	 * @return	string
	 */
	public static function pAlcoholWarning()
	{
		return self::getValue(self::$alcoholWarning);
	}

	/**
	 * Return the 'availableStrength' Property value
	 *
	 * @return	string
	 */
	public static function pAvailableStrength()
	{
		return self::getValue(self::$availableStrength);
	}

	/**
	 * Return the 'breastfeedingWarning' Property value
	 *
	 * @return	string
	 */
	public static function pBreastfeedingWarning()
	{
		return self::getValue(self::$breastfeedingWarning);
	}

	/**
	 * Return the 'clincalPharmacology' Property value
	 *
	 * @return	string
	 */
	public static function pClincalPharmacology()
	{
		return self::getValue(self::$clincalPharmacology);
	}

	/**
	 * Return the 'cost' Property value
	 *
	 * @return	string
	 */
	public static function pCost()
	{
		return self::getValue(self::$cost);
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
	 * Return the 'doseSchedule' Property value
	 *
	 * @return	string
	 */
	public static function pDoseSchedule()
	{
		return self::getValue(self::$doseSchedule);
	}

	/**
	 * Return the 'drugClass' Property value
	 *
	 * @return	string
	 */
	public static function pDrugClass()
	{
		return self::getValue(self::$drugClass);
	}

	/**
	 * Return the 'foodWarning' Property value
	 *
	 * @return	string
	 */
	public static function pFoodWarning()
	{
		return self::getValue(self::$foodWarning);
	}

	/**
	 * Return the 'interactingDrug' Property value
	 *
	 * @return	string
	 */
	public static function pInteractingDrug()
	{
		return self::getValue(self::$interactingDrug);
	}

	/**
	 * Return the 'isAvailableGenerically' Property value
	 *
	 * @return	string
	 */
	public static function pIsAvailableGenerically()
	{
		return self::getValue(self::$isAvailableGenerically);
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
	 * Return the 'labelDetails' Property value
	 *
	 * @return	string
	 */
	public static function pLabelDetails()
	{
		return self::getValue(self::$labelDetails);
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
	 * Return the 'overdosage' Property value
	 *
	 * @return	string
	 */
	public static function pOverdosage()
	{
		return self::getValue(self::$overdosage);
	}

	/**
	 * Return the 'pregnancyCategory' Property value
	 *
	 * @return	string
	 */
	public static function pPregnancyCategory()
	{
		return self::getValue(self::$pregnancyCategory);
	}

	/**
	 * Return the 'pregnancyWarning' Property value
	 *
	 * @return	string
	 */
	public static function pPregnancyWarning()
	{
		return self::getValue(self::$pregnancyWarning);
	}

	/**
	 * Return the 'prescribingInfo' Property value
	 *
	 * @return	string
	 */
	public static function pPrescribingInfo()
	{
		return self::getValue(self::$prescribingInfo);
	}

	/**
	 * Return the 'prescriptionStatus' Property value
	 *
	 * @return	string
	 */
	public static function pPrescriptionStatus()
	{
		return self::getValue(self::$prescriptionStatus);
	}

	/**
	 * Return the 'relatedDrug' Property value
	 *
	 * @return	string
	 */
	public static function pRelatedDrug()
	{
		return self::getValue(self::$relatedDrug);
	}

	/**
	 * Return the 'warning' Property value
	 *
	 * @return	string
	 */
	public static function pWarning()
	{
		return self::getValue(self::$warning);
	}
}
