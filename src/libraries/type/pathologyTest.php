<?php
/**
 * A medical test performed by a laboratory that typically involves examination of a tissue sample by a pathologist.
 *
 * @see    http://schema.org/PathologyTest
*/
abstract class TypePathologyTest extends TypeMedicalTest
{
	/**
	 * The Schema.org Type Scope
	 *
	 * @var string
	 */
	protected static $scope = 'https://schema.org/PathologyTest';

	/**
	 * The type of tissue sample required for the test.
	 * Expected Type: Text
	 * 
	 * @var	array
	 */
	protected static $tissueSample = array('value' => 'tissueSample',
		'expectedTypes' => array('Text')
	);

	/**
	 * Return the 'tissueSample' Property value
	 *
	 * @return	string
	 */
	public static function pTissueSample()
	{
		return self::getValue(self::$tissueSample);
	}
}
