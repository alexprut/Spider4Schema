<?php
/**
 * Categories of medical devices, organized by the purpose or intended use of the device.
 *
 * @see    http://schema.org/MedicalDevicePurpose
*/
abstract class TypeMedicalDevicePurpose extends TypeMedicalEnumeration
{
	/**
	 * The Schema.org Type Scope
	 *
	 * @var string
	 */
	protected static $scope = 'https://schema.org/MedicalDevicePurpose';
}
