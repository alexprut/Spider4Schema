<?php
/**
 * Any medical imaging modality typically used for diagnostic purposes. Enumerated type.
 *
 * @see    http://schema.org/MedicalImagingTechnique
*/
abstract class TypeMedicalImagingTechnique extends TypeMedicalEnumeration
{
	/**
	 * The Schema.org Type Scope
	 *
	 * @var string
	 */
	protected static $scope = 'https://schema.org/MedicalImagingTechnique';
}
