<?php
/**
 * The place where a person lives.
 *
 * @see    http://schema.org/Residence
 * @since  1.0
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
