<?php
/**
 * The act of editing a recipient by removing one of its objects.
 *
 * @see    http://schema.org/DeleteAction
 * @since  1.0
*/
abstract class TypeDeleteAction extends TypeUpdateAction
{
	/**
	 * The Schema.org Type Scope
	 *
	 * @var string
	 */
	protected static $scope = 'https://schema.org/DeleteAction';
}
