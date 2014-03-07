<?php
/**
 * An educational organization.
 *
 * @see    http://schema.org/EducationalOrganization
*/
abstract class TypeEducationalOrganization extends TypeOrganization
{
	/**
	 * The Schema.org Type Scope
	 *
	 * @var string
	 */
	protected static $scope = 'https://schema.org/EducationalOrganization';

	/**
	 * Alumni of educational organization.
	 * Expected Type: Person
	 * 
	 * @var	array
	 */
	protected static $alumni = array('value' => 'alumni',
		'expectedTypes' => array('Person')
	);

	/**
	 * Return the 'alumni' Property value
	 *
	 * @return	string
	 */
	public static function pAlumni()
	{
		return self::getValue(self::$alumni);
	}
}
