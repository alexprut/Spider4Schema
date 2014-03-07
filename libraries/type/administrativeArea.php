<?php
/**
 * A geographical region under the jurisdiction of a particular government.
 *
 * @see    http://schema.org/AdministrativeArea
*/
abstract class TypeAdministrativeArea extends TypePlace
{
	/**
	 * The Schema.org Type Scope
	 *
	 * @var string
	 */
	protected static $scope = 'https://schema.org/AdministrativeArea';
}
