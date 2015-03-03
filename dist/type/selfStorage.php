<?php
/**
 * A self-storage facility.
 *
 * @see    http://schema.org/SelfStorage
*/
abstract class TypeSelfStorage extends TypeLocalBusiness
{
	/**
	 * The Schema.org Type Scope
	 *
	 * @var string
	 */
	protected static $scope = 'https://schema.org/SelfStorage';
}
