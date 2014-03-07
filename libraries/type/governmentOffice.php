<?php
/**
 * A government office—for example, an IRS or DMV office.
 *
 * @see    http://schema.org/GovernmentOffice
*/
abstract class TypeGovernmentOffice extends TypeLocalBusiness
{
	/**
	 * The Schema.org Type Scope
	 *
	 * @var string
	 */
	protected static $scope = 'https://schema.org/GovernmentOffice';
}
