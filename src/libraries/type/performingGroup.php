<?php
/**
 * A performance group, such as a band, an orchestra, or a circus.
 *
 * @see    http://schema.org/PerformingGroup
*/
abstract class TypePerformingGroup extends TypeOrganization
{
	/**
	 * The Schema.org Type Scope
	 *
	 * @var string
	 */
	protected static $scope = 'https://schema.org/PerformingGroup';
}
