<?php
/**
 * A class of medical drugs, e.g., statins. Classes can represent general pharmacological class, common mechanisms of action, common physiological effects, etc.
 *
 * @see    http://schema.org/DrugClass
 * @since  1.0
*/
abstract class TypeDrugClass extends TypeMedicalTherapy
{
	/**
	 * The Schema.org Type Scope
	 *
	 * @var string
	 */
	protected static $scope = 'https://schema.org/DrugClass';

	/**
	 * A drug in this drug class.
	 * Expected Type: Drug
	 * 
	 * @var	array
	 */
	protected static $drug = array('value' => 'drug',
		'expectedTypes' => array('Drug')
	);

	/**
	 * Return the 'drug' Property value
	 *
	 * @return	string
	 */
	public static function pDrug()
	{
		return self::getValue(self::$drug);
	}
}
