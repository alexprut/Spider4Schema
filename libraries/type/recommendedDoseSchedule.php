<?php
/**
 * A recommended dosing schedule for a drug or supplement as prescribed or recommended by an authority or by the drug/supplement's manufacturer. Capture the recommending authority in the recognizingAuthority property of MedicalEntity.
 *
 * @see    http://schema.org/RecommendedDoseSchedule
 * @since  1.0
*/
abstract class TypeRecommendedDoseSchedule extends TypeDoseSchedule
{
	/**
	 * The Schema.org Type Scope
	 *
	 * @var string
	 */
	protected static $scope = 'https://schema.org/RecommendedDoseSchedule';
}
