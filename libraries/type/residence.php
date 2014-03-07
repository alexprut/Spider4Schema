<?php
/**
 * The place where a person lives.
 *
 * @see    http://schema.org/Residence
*/
abstract class TypeResidence extends TypePlace
{
	/**
	 * The Schema.org Type Scope
	 *
	 * @var string
	 */
	protected static $scope = 'https://schema.org/Residence';
}
