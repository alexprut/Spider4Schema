<?php
/**
 * Any recommendation made by a standard society (e.g. ACC/AHA) or consensus statement that denotes how to diagnose and treat a particular condition. Note: this type should be used to tag the actual guideline recommendation; if the guideline recommendation occurs in a larger scholarly article, use MedicalScholarlyArticle to tag the overall article, not this type. Note also: the organization making the recommendation should be captured in the recognizingAuthority base property of MedicalEntity.
 *
 * @see    http://schema.org/MedicalGuideline
*/
abstract class TypeMedicalGuideline extends TypeMedicalEntity
{
	/**
	 * The Schema.org Type Scope
	 *
	 * @var string
	 */
	protected static $scope = 'https://schema.org/MedicalGuideline';

	/**
	 * Strength of evidence of the data used to formulate the guideline (enumerated).
	 * Expected Type: MedicalEvidenceLevel
	 * 
	 * @var	array
	 */
	protected static $evidenceLevel = array('value' => 'evidenceLevel',
		'expectedTypes' => array('MedicalEvidenceLevel')
	);

	/**
	 * Source of the data used to formulate the guidance, e.g. RCT, consensus opinion, etc.
	 * Expected Type: Text
	 * 
	 * @var	array
	 */
	protected static $evidenceOrigin = array('value' => 'evidenceOrigin',
		'expectedTypes' => array('Text')
	);

	/**
	 * Date on which this guideline's recommendation was made.
	 * Expected Type: Date
	 * 
	 * @var	array
	 */
	protected static $guidelineDate = array('value' => 'guidelineDate',
		'expectedTypes' => array('Date')
	);

	/**
	 * The medical conditions, treatments, etc. that are the subject of the guideline.
	 * Expected Type: MedicalEntity
	 * 
	 * @var	array
	 */
	protected static $guidelineSubject = array('value' => 'guidelineSubject',
		'expectedTypes' => array('MedicalEntity')
	);

	/**
	 * Return the 'evidenceLevel' Property value
	 *
	 * @return	string
	 */
	public static function pEvidenceLevel()
	{
		return self::getValue(self::$evidenceLevel);
	}

	/**
	 * Return the 'evidenceOrigin' Property value
	 *
	 * @return	string
	 */
	public static function pEvidenceOrigin()
	{
		return self::getValue(self::$evidenceOrigin);
	}

	/**
	 * Return the 'guidelineDate' Property value
	 *
	 * @return	string
	 */
	public static function pGuidelineDate()
	{
		return self::getValue(self::$guidelineDate);
	}

	/**
	 * Return the 'guidelineSubject' Property value
	 *
	 * @return	string
	 */
	public static function pGuidelineSubject()
	{
		return self::getValue(self::$guidelineSubject);
	}
}
