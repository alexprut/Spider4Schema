<?php
/**
 * A post office.
 *
 * @see    http://schema.org/PostOffice
*/
abstract class TypePostOffice extends TypeGovernmentOffice
{
	/**
	 * The Schema.org Type Scope
	 *
	 * @var string
	 */
	protected static $scope = 'https://schema.org/PostOffice';
}
