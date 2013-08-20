<?php
/**
 * An EducationalAudience
 *
 * @see    http://schema.org/EducationalAudience
 * @since  1.0
*/
abstract class TypeEducationalAudience extends TypeAudience
{
	/**
	 * The Schema.org Type Scope
	 *
	 * @var string
	 */
	protected static $scope = 'https://schema.org/EducationalAudience';

	/**
	 * An educationalRole of an EducationalAudience
	 * Expected Type: Text
	 * 
	 * @var	array
	 */
	protected static $educationalRole = array('value' => 'educationalRole',
		'expectedTypes' => array('Text')
	);

	/**
	 * Return the 'educationalRole' Property value
	 *
	 * @return	string
	 */
	public static function pEducationalRole()
	{
		return self::getValue(self::$educationalRole);
	}
}
