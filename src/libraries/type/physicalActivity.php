<?php
/**
 * Any bodily activity that enhances or maintains physical fitness and overall health and wellness. Includes activity that is part of daily living and routine, structured exercise, and exercise prescribed as part of a medical treatment or recovery plan.
 *
 * @see    http://schema.org/PhysicalActivity
*/
abstract class TypePhysicalActivity extends TypeLifestyleModification
{
	/**
	 * The Schema.org Type Scope
	 *
	 * @var string
	 */
	protected static $scope = 'https://schema.org/PhysicalActivity';

	/**
	 * The anatomy of the underlying organ system or structures associated with this entity.
	 * Expected Type: AnatomicalStructure, AnatomicalSystem, SuperficialAnatomy
	 * 
	 * @var	array
	 */
	protected static $associatedAnatomy = array('value' => 'associatedAnatomy',
		'expectedTypes' => array('AnatomicalStructure', 'AnatomicalSystem', 'SuperficialAnatomy')
	);

	/**
	 * A category for the item. Greater signs or slashes can be used to informally indicate a category hierarchy.
	 * Expected Type: PhysicalActivityCategory, Text, Thing
	 * 
	 * @var	array
	 */
	protected static $category = array('value' => 'category',
		'expectedTypes' => array('PhysicalActivityCategory', 'Text', 'Thing')
	);

	/**
	 * The characteristics of associated patients, such as age, gender, race etc.
	 * Expected Type: Text
	 * 
	 * @var	array
	 */
	protected static $epidemiology = array('value' => 'epidemiology',
		'expectedTypes' => array('Text')
	);

	/**
	 * Changes in the normal mechanical, physical, and biochemical functions that are associated with this activity or condition.
	 * Expected Type: Text
	 * 
	 * @var	array
	 */
	protected static $pathophysiology = array('value' => 'pathophysiology',
		'expectedTypes' => array('Text')
	);

	/**
	 * Return the 'associatedAnatomy' Property value
	 *
	 * @return	string
	 */
	public static function pAssociatedAnatomy()
	{
		return self::getValue(self::$associatedAnatomy);
	}

	/**
	 * Return the 'category' Property value
	 *
	 * @return	string
	 */
	public static function pCategory()
	{
		return self::getValue(self::$category);
	}

	/**
	 * Return the 'epidemiology' Property value
	 *
	 * @return	string
	 */
	public static function pEpidemiology()
	{
		return self::getValue(self::$epidemiology);
	}

	/**
	 * Return the 'pathophysiology' Property value
	 *
	 * @return	string
	 */
	public static function pPathophysiology()
	{
		return self::getValue(self::$pathophysiology);
	}
}
