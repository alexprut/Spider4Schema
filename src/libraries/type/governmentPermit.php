<?php
/**
 * A permit issued by a government agency.
 *
 * @see    http://schema.org/GovernmentPermit
*/
abstract class TypeGovernmentPermit extends TypePermit
{
	/**
	 * The Schema.org Type Scope
	 *
	 * @var string
	 */
	protected static $scope = 'https://schema.org/GovernmentPermit';
}
