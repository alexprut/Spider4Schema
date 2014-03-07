<?php
/**
 * Any medical imaging modality typically used for diagnostic purposes.
 *
 * @see    http://schema.org/ImagingTest
*/
abstract class TypeImagingTest extends TypeMedicalTest
{
	/**
	 * The Schema.org Type Scope
	 *
	 * @var string
	 */
	protected static $scope = 'https://schema.org/ImagingTest';

	/**
	 * Imaging technique used.
	 * Expected Type: MedicalImagingTechnique
	 * 
	 * @var	array
	 */
	protected static $imagingTechnique = array('value' => 'imagingTechnique',
		'expectedTypes' => array('MedicalImagingTechnique')
	);

	/**
	 * Return the 'imagingTechnique' Property value
	 *
	 * @return	string
	 */
	public static function pImagingTechnique()
	{
		return self::getValue(self::$imagingTechnique);
	}
}
