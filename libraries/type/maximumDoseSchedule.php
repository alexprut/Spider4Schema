<?php
/**
 * The maximum dosing schedule considered safe for a drug or supplement as recommended by an authority or by the drug/supplement's manufacturer. Capture the recommending authority in the recognizingAuthority property of MedicalEntity.
 *
 * @see    http://schema.org/MaximumDoseSchedule
*/
abstract class TypeMaximumDoseSchedule extends TypeDoseSchedule
{
	/**
	 * The Schema.org Type Scope
	 *
	 * @var string
	 */
	protected static $scope = 'https://schema.org/MaximumDoseSchedule';
}
