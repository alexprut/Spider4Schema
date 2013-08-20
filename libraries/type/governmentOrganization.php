<?php
/**
 * A governmental organization or agency.
 *
 * @see    http://schema.org/GovernmentOrganization
 * @since  1.0
*/
abstract class TypeGovernmentOrganization extends TypeOrganization
{
	/**
	 * The Schema.org Type Scope
	 *
	 * @var string
	 */
	protected static $scope = 'https://schema.org/GovernmentOrganization';
}
