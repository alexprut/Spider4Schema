<?php
/**
 * Any part of the human body, typically a component of an anatomical system. Organs, tissues, and cells are all anatomical structures.
 *
 * @see    http://schema.org/AnatomicalStructure
*/
abstract class TypeAnatomicalStructure extends TypeMedicalEntity
{
	/**
	 * The Schema.org Type Scope
	 *
	 * @var string
	 */
	protected static $scope = 'https://schema.org/AnatomicalStructure';

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
	 * Location in the body of the anatomical structure.
	 * Expected Type: Text
	 * 
	 * @var	array
	 */
	protected static $bodyLocation = array('value' => 'bodyLocation',
		'expectedTypes' => array('Text')
	);

	/**
	 * Other anatomical structures to which this structure is connected.
	 * Expected Type: AnatomicalStructure
	 * 
	 * @var	array
	 */
	protected static $connectedTo = array('value' => 'connectedTo',
		'expectedTypes' => array('AnatomicalStructure')
	);

	/**
	 * An image containing a diagram that illustrates the structure and/or its component substructures and/or connections with other structures.
	 * Expected Type: ImageObject
	 * 
	 * @var	array
	 */
	protected static $diagram = array('value' => 'diagram',
		'expectedTypes' => array('ImageObject')
	);

	/**
	 * Function of the anatomical structure.
	 * Expected Type: Text
	 * 
	 * @var	array
	 */
	protected static $function = array('value' => 'function',
		'expectedTypes' => array('Text')
	);

	/**
	 * The anatomical or organ system that this structure is part of.
	 * Expected Type: AnatomicalSystem
	 * 
	 * @var	array
	 */
	protected static $partOfSystem = array('value' => 'partOfSystem',
		'expectedTypes' => array('AnatomicalSystem')
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
	 * Component (sub-)structure(s) that comprise this anatomical structure.
	 * Expected Type: AnatomicalStructure
	 * 
	 * @var	array
	 */
	protected static $subStructure = array('value' => 'subStructure',
		'expectedTypes' => array('AnatomicalStructure')
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
	 * Return the 'bodyLocation' Property value
	 *
	 * @return	string
	 */
	public static function pBodyLocation()
	{
		return self::getValue(self::$bodyLocation);
	}

	/**
	 * Return the 'connectedTo' Property value
	 *
	 * @return	string
	 */
	public static function pConnectedTo()
	{
		return self::getValue(self::$connectedTo);
	}

	/**
	 * Return the 'diagram' Property value
	 *
	 * @return	string
	 */
	public static function pDiagram()
	{
		return self::getValue(self::$diagram);
	}

	/**
	 * Return the 'function' Property value
	 *
	 * @return	string
	 */
	public static function pFunction()
	{
		return self::getValue(self::$function);
	}

	/**
	 * Return the 'partOfSystem' Property value
	 *
	 * @return	string
	 */
	public static function pPartOfSystem()
	{
		return self::getValue(self::$partOfSystem);
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
	 * Return the 'subStructure' Property value
	 *
	 * @return	string
	 */
	public static function pSubStructure()
	{
		return self::getValue(self::$subStructure);
	}
}
