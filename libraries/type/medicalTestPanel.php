<?php
/**
 * Any collection of tests commonly ordered together.
 *
 * @see    http://schema.org/MedicalTestPanel
 * @since  1.0
*/
abstract class TypeMedicalTestPanel extends TypeMedicalTest
{
	/**
	 * The Schema.org Type Scope
	 *
	 * @var string
	 */
	protected static $scope = 'https://schema.org/MedicalTestPanel';

	/**
	 * A component test of the panel.
	 * Expected Type: MedicalTest
	 * 
	 * @var	array
	 */
	protected static $subTest = array('value' => 'subTest',
		'expectedTypes' => array('MedicalTest')
	);

	/**
	 * Return the 'subTest' Property value
	 *
	 * @return	string
	 */
	public static function pSubTest()
	{
		return self::getValue(self::$subTest);
	}
}
