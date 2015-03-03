<?php
/**
 * A web page that provides medical information.
 *
 * @see    http://schema.org/MedicalWebPage
*/
abstract class TypeMedicalWebPage extends TypeWebPage
{
	/**
	 * The Schema.org Type Scope
	 *
	 * @var string
	 */
	protected static $scope = 'https://schema.org/MedicalWebPage';

	/**
	 * An aspect of medical practice that is considered on the page, such as 'diagnosis', 'treatment', 'causes', 'prognosis', 'etiology', 'epidemiology', etc.
	 * Expected Type: Text
	 * 
	 * @var	array
	 */
	protected static $aspect = array('value' => 'aspect',
		'expectedTypes' => array('Text')
	);

	/**
	 * Return the 'aspect' Property value
	 *
	 * @return	string
	 */
	public static function pAspect()
	{
		return self::getValue(self::$aspect);
	}
}
