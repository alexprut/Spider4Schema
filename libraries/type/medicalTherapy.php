<?php
/**
 * Any medical intervention designed to prevent, treat, and cure human diseases and medical conditions, including both curative and palliative therapies. Medical therapies are typically processes of care relying upon pharmacotherapy, behavioral therapy, supportive therapy (with fluid or nutrition for example), or detoxification (e.g. hemodialysis) aimed at improving or preventing a health condition.
 *
 * @see    http://schema.org/MedicalTherapy
 * @since  1.0
*/
abstract class TypeMedicalTherapy extends TypeMedicalEntity
{
	/**
	 * The Schema.org Type Scope
	 *
	 * @var string
	 */
	protected static $scope = 'https://schema.org/MedicalTherapy';

	/**
	 * A possible complication and/or side effect of this therapy. If it is known that an adverse outcome is serious (resulting in death, disability, or permanent damage; requiring hospitalization; or is otherwise life-threatening or requires immediate medical attention), tag it as a seriouseAdverseOutcome instead.
	 * Expected Type: MedicalEntity
	 * 
	 * @var	array
	 */
	protected static $adverseOutcome = array('value' => 'adverseOutcome',
		'expectedTypes' => array('MedicalEntity')
	);

	/**
	 * A contraindication for this therapy.
	 * Expected Type: MedicalContraindication
	 * 
	 * @var	array
	 */
	protected static $contraindication = array('value' => 'contraindication',
		'expectedTypes' => array('MedicalContraindication')
	);

	/**
	 * A therapy that duplicates or overlaps this one.
	 * Expected Type: MedicalTherapy
	 * 
	 * @var	array
	 */
	protected static $duplicateTherapy = array('value' => 'duplicateTherapy',
		'expectedTypes' => array('MedicalTherapy')
	);

	/**
	 * A factor that indicates use of this therapy for treatment and/or prevention of a condition, symptom, etc. For therapies such as drugs, indications can include both officially-approved indications as well as off-label uses. These can be distinguished by using the ApprovedIndication subtype of MedicalIndication.
	 * Expected Type: MedicalIndication
	 * 
	 * @var	array
	 */
	protected static $indication = array('value' => 'indication',
		'expectedTypes' => array('MedicalIndication')
	);

	/**
	 * A possible serious complication and/or serious side effect of this therapy. Serious adverse outcomes include those that are life-threatening; result in death, disability, or permanent damage; require hospitalization or prolong existing hospitalization; cause congenital anomalies or birth defects; or jeopardize the patient and may require medical or surgical intervention to prevent one of the outcomes in this definition.
	 * Expected Type: MedicalEntity
	 * 
	 * @var	array
	 */
	protected static $seriousAdverseOutcome = array('value' => 'seriousAdverseOutcome',
		'expectedTypes' => array('MedicalEntity')
	);

	/**
	 * Return the 'adverseOutcome' Property value
	 *
	 * @return	string
	 */
	public static function pAdverseOutcome()
	{
		return self::getValue(self::$adverseOutcome);
	}

	/**
	 * Return the 'contraindication' Property value
	 *
	 * @return	string
	 */
	public static function pContraindication()
	{
		return self::getValue(self::$contraindication);
	}

	/**
	 * Return the 'duplicateTherapy' Property value
	 *
	 * @return	string
	 */
	public static function pDuplicateTherapy()
	{
		return self::getValue(self::$duplicateTherapy);
	}

	/**
	 * Return the 'indication' Property value
	 *
	 * @return	string
	 */
	public static function pIndication()
	{
		return self::getValue(self::$indication);
	}

	/**
	 * Return the 'seriousAdverseOutcome' Property value
	 *
	 * @return	string
	 */
	public static function pSeriousAdverseOutcome()
	{
		return self::getValue(self::$seriousAdverseOutcome);
	}
}
