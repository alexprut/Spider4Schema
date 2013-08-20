<?php
/**
 * A technical article - Example: How-to (task) topics, step-by-step, procedural troubleshooting, specifications, etc.
 *
 * @see    http://schema.org/TechArticle
 * @since  1.0
*/
abstract class TypeTechArticle extends TypeArticle
{
	/**
	 * The Schema.org Type Scope
	 *
	 * @var string
	 */
	protected static $scope = 'https://schema.org/TechArticle';

	/**
	 * Prerequisites needed to fulfill steps in article.
	 * Expected Type: Text
	 * 
	 * @var	array
	 */
	protected static $dependencies = array('value' => 'dependencies',
		'expectedTypes' => array('Text')
	);

	/**
	 * Proficiency needed for this content; expected values: 'Beginner', 'Expert'.
	 * Expected Type: Text
	 * 
	 * @var	array
	 */
	protected static $proficiencyLevel = array('value' => 'proficiencyLevel',
		'expectedTypes' => array('Text')
	);

	/**
	 * Return the 'dependencies' Property value
	 *
	 * @return	string
	 */
	public static function pDependencies()
	{
		return self::getValue(self::$dependencies);
	}

	/**
	 * Return the 'proficiencyLevel' Property value
	 *
	 * @return	string
	 */
	public static function pProficiencyLevel()
	{
		return self::getValue(self::$proficiencyLevel);
	}
}
