<?php
/**
 * Anatomical features that can be observed by sight (without dissection), including the form and proportions of the human body as well as surface landmarks that correspond to deeper subcutaneous structures. Superficial anatomy plays an important role in sports medicine, phlebotomy, and other medical specialties as underlying anatomical structures can be identified through surface palpation. For example, during back surgery, superficial anatomy can be used to palpate and count vertebrae to find the site of incision. Or in phlebotomy, superficial anatomy can be used to locate an underlying vein; for example, the median cubital vein can be located by palpating the borders of the cubital fossa (such as the epicondyles of the humerus) and then looking for the superficial signs of the vein, such as size, prominence, ability to refill after depression, and feel of surrounding tissue support. As another example, in a subluxation (dislocation) of the glenohumeral joint, the bony structure becomes pronounced with the deltoid muscle failing to cover the glenohumeral joint allowing the edges of the scapula to be superficially visible. Here, the superficial anatomy is the visible edges of the scapula, implying the underlying dislocation of the joint (the related anatomical structure).
 *
 * @see    http://schema.org/SuperficialAnatomy
*/
abstract class TypeSuperficialAnatomy extends TypeMedicalEntity
{
	/**
	 * The Schema.org Type Scope
	 *
	 * @var string
	 */
	protected static $scope = 'https://schema.org/SuperficialAnatomy';

	/**
	 * If applicable, a description of the pathophysiology associated with the anatomical system, including potential abnormal changes in the mechanical, physical, and biochemical functions of the system.
	 * Expected Type: Text
	 * 
	 * @var	array
	 */
	protected static $associatedPathophysiology = array('value' => 'associatedPathophysiology',
		'expectedTypes' => array('Text')
	);

	/**
	 * Anatomical systems or structures that relate to the superficial anatomy.
	 * Expected Type: AnatomicalSystem, AnatomicalStructure
	 * 
	 * @var	array
	 */
	protected static $relatedAnatomy = array('value' => 'relatedAnatomy',
		'expectedTypes' => array('AnatomicalSystem', 'AnatomicalStructure')
	);

	/**
	 * A medical condition associated with this anatomy.
	 * Expected Type: MedicalCondition
	 * 
	 * @var	array
	 */
	protected static $relatedCondition = array('value' => 'relatedCondition',
		'expectedTypes' => array('MedicalCondition')
	);

	/**
	 * A medical therapy related to this anatomy.
	 * Expected Type: MedicalTherapy
	 * 
	 * @var	array
	 */
	protected static $relatedTherapy = array('value' => 'relatedTherapy',
		'expectedTypes' => array('MedicalTherapy')
	);

	/**
	 * The significance associated with the superficial anatomy; as an example, how characteristics of the superficial anatomy can suggest underlying medical conditions or courses of treatment.
	 * Expected Type: Text
	 * 
	 * @var	array
	 */
	protected static $significance = array('value' => 'significance',
		'expectedTypes' => array('Text')
	);

	/**
	 * Return the 'associatedPathophysiology' Property value
	 *
	 * @return	string
	 */
	public static function pAssociatedPathophysiology()
	{
		return self::getValue(self::$associatedPathophysiology);
	}

	/**
	 * Return the 'relatedAnatomy' Property value
	 *
	 * @return	string
	 */
	public static function pRelatedAnatomy()
	{
		return self::getValue(self::$relatedAnatomy);
	}

	/**
	 * Return the 'relatedCondition' Property value
	 *
	 * @return	string
	 */
	public static function pRelatedCondition()
	{
		return self::getValue(self::$relatedCondition);
	}

	/**
	 * Return the 'relatedTherapy' Property value
	 *
	 * @return	string
	 */
	public static function pRelatedTherapy()
	{
		return self::getValue(self::$relatedTherapy);
	}

	/**
	 * Return the 'significance' Property value
	 *
	 * @return	string
	 */
	public static function pSignificance()
	{
		return self::getValue(self::$significance);
	}
}
