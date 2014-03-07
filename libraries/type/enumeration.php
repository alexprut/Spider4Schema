<?php
/**
 * Lists or enumerations—for example, a list of cuisines or music genres, etc.
 *
 * @see    http://schema.org/Enumeration
*/
abstract class TypeEnumeration extends TypeIntangible
{
	/**
	 * The Schema.org Type Scope
	 *
	 * @var string
	 */
	protected static $scope = 'https://schema.org/Enumeration';
}
