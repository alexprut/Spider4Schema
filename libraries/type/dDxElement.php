<?php
/**
 * An alternative, closely-related condition typically considered later in the differential diagnosis process along with the signs that are used to distinguish it.
 *
 * @see    http://schema.org/DDxElement
 * @since  1.0
*/
abstract class TypeDDxElement extends TypeMedicalIntangible
{
	/**
	 * The Schema.org Type Scope
	 *
	 * @var string
	 */
	protected static $scope = 'https://schema.org/DDxElement';

	/**
	 * One or more alternative conditions considered in the differential diagnosis process.
	 * Expected Type: MedicalCondition
	 * 
	 * @var	array
	 */
	protected static $diagnosis = array('value' => 'diagnosis',
		'expectedTypes' => array('MedicalCondition')
	);

	/**
	 * One of a set of signs and symptoms that can be used to distinguish this diagnosis from others in the differential diagnosis.
	 * Expected Type: MedicalSignOrSymptom
	 * 
	 * @var	array
	 */
	protected static $distinguishingSign = array('value' => 'distinguishingSign',
		'expectedTypes' => array('MedicalSignOrSymptom')
	);

	/**
	 * Return the 'diagnosis' Property value
	 *
	 * @return	string
	 */
	public static function pDiagnosis()
	{
		return self::getValue(self::$diagnosis);
	}

	/**
	 * Return the 'distinguishingSign' Property value
	 *
	 * @return	string
	 */
	public static function pDistinguishingSign()
	{
		return self::getValue(self::$distinguishingSign);
	}
}
