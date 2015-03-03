<?php
/**
 * A PerformanceRole is a Role that some entity places with regard to a theatrical performance, e.g. in a Movie, TVSeries etc.
 *
 * @see    http://schema.org/PerformanceRole
*/
abstract class TypePerformanceRole extends TypeRole
{
	/**
	 * The Schema.org Type Scope
	 *
	 * @var string
	 */
	protected static $scope = 'https://schema.org/PerformanceRole';

	/**
	 * The name of a character played in some acting or performing role, i.e. in a PerformanceRole.
	 * Expected Type: Text
	 * 
	 * @var	array
	 */
	protected static $characterName = array('value' => 'characterName',
		'expectedTypes' => array('Text')
	);

	/**
	 * Return the 'characterName' Property value
	 *
	 * @return	string
	 */
	public static function pCharacterName()
	{
		return self::getValue(self::$characterName);
	}
}
