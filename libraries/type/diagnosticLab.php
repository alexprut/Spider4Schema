<?php
/**
 * A medical laboratory that offers on-site or off-site diagnostic services.
 *
 * @see    http://schema.org/DiagnosticLab
 * @since  1.0
*/
abstract class TypeDiagnosticLab extends TypeMedicalOrganization
{
	/**
	 * The Schema.org Type Scope
	 *
	 * @var string
	 */
	protected static $scope = 'https://schema.org/DiagnosticLab';

	/**
	 * A diagnostic test or procedure offered by this lab.
	 * Expected Type: MedicalTest
	 * 
	 * @var	array
	 */
	protected static $availableTest = array('value' => 'availableTest',
		'expectedTypes' => array('MedicalTest')
	);

	/**
	 * Return the 'availableTest' Property value
	 *
	 * @return	string
	 */
	public static function pAvailableTest()
	{
		return self::getValue(self::$availableTest);
	}
}
