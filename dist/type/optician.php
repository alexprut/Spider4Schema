<?php
/**
 * A store that sells reading glasses and similar devices for improving vision.
 *
 * @see    http://schema.org/Optician
*/
abstract class TypeOptician extends TypeMedicalOrganization
{
	/**
	 * The Schema.org Type Scope
	 *
	 * @var string
	 */
	protected static $scope = 'https://schema.org/Optician';
}
