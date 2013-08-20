<?php
/**
 * The act of manipulating/administering/supervising/controlling one or more objects.
 *
 * @see    http://schema.org/OrganizeAction
 * @since  1.0
*/
abstract class TypeOrganizeAction extends TypeAction
{
	/**
	 * The Schema.org Type Scope
	 *
	 * @var string
	 */
	protected static $scope = 'https://schema.org/OrganizeAction';
}
