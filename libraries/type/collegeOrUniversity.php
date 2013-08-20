<?php
/**
 * A college, university, or other third-level educational institution.
 *
 * @see    http://schema.org/CollegeOrUniversity
 * @since  1.0
*/
abstract class TypeCollegeOrUniversity extends TypeEducationalOrganization
{
	/**
	 * The Schema.org Type Scope
	 *
	 * @var string
	 */
	protected static $scope = 'https://schema.org/CollegeOrUniversity';
}
