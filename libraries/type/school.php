<?php
/**
 * A school.
 *
 * @see    http://schema.org/School
 * @since  1.0
*/
abstract class TypeSchool extends TypeEducationalOrganization
{
	/**
	 * The Schema.org Type Scope
	 *
	 * @var string
	 */
	protected static $scope = 'https://schema.org/School';
}
