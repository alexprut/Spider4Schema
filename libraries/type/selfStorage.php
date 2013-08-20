<?php
/**
 * Self-storage facility.
 *
 * @see    http://schema.org/SelfStorage
 * @since  1.0
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
