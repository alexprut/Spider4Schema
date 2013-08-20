<?php
/**
 * A guideline contraindication that designates a process as harmful and where quality of the data supporting the contraindication is sound.
 *
 * @see    http://schema.org/MedicalGuidelineContraindication
 * @since  1.0
*/
abstract class TypeMedicalGuidelineContraindication extends TypeMedicalGuideline
{
	/**
	 * The Schema.org Type Scope
	 *
	 * @var string
	 */
	protected static $scope = 'https://schema.org/MedicalGuidelineContraindication';
}
