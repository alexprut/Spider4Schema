<?php
/**
 * An intangible item that describes an alignment between a learning resource and a node in an educational framework.
 *
 * @see    http://schema.org/AlignmentObject
*/
abstract class TypeAlignmentObject extends TypeIntangible
{
	/**
	 * The Schema.org Type Scope
	 *
	 * @var string
	 */
	protected static $scope = 'https://schema.org/AlignmentObject';

	/**
	 * A category of alignment between the learning resource and the framework node. Recommended values include: 'assesses', 'teaches', 'requires', 'textComplexity', 'readingLevel', 'educationalSubject', and 'educationLevel'.
	 * Expected Type: Text
	 * 
	 * @var	array
	 */
	protected static $alignmentType = array('value' => 'alignmentType',
		'expectedTypes' => array('Text')
	);

	/**
	 * The framework to which the resource being described is aligned.
	 * Expected Type: Text
	 * 
	 * @var	array
	 */
	protected static $educationalFramework = array('value' => 'educationalFramework',
		'expectedTypes' => array('Text')
	);

	/**
	 * The description of a node in an established educational framework.
	 * Expected Type: Text
	 * 
	 * @var	array
	 */
	protected static $targetDescription = array('value' => 'targetDescription',
		'expectedTypes' => array('Text')
	);

	/**
	 * The name of a node in an established educational framework.
	 * Expected Type: Text
	 * 
	 * @var	array
	 */
	protected static $targetName = array('value' => 'targetName',
		'expectedTypes' => array('Text')
	);

	/**
	 * The URL of a node in an established educational framework.
	 * Expected Type: URL
	 * 
	 * @var	array
	 */
	protected static $targetUrl = array('value' => 'targetUrl',
		'expectedTypes' => array('URL')
	);

	/**
	 * Return the 'alignmentType' Property value
	 *
	 * @return	string
	 */
	public static function pAlignmentType()
	{
		return self::getValue(self::$alignmentType);
	}

	/**
	 * Return the 'educationalFramework' Property value
	 *
	 * @return	string
	 */
	public static function pEducationalFramework()
	{
		return self::getValue(self::$educationalFramework);
	}

	/**
	 * Return the 'targetDescription' Property value
	 *
	 * @return	string
	 */
	public static function pTargetDescription()
	{
		return self::getValue(self::$targetDescription);
	}

	/**
	 * Return the 'targetName' Property value
	 *
	 * @return	string
	 */
	public static function pTargetName()
	{
		return self::getValue(self::$targetName);
	}

	/**
	 * Return the 'targetUrl' Property value
	 *
	 * @return	string
	 */
	public static function pTargetUrl()
	{
		return self::getValue(self::$targetUrl);
	}
}
