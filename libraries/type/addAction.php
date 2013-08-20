<?php
/**
 * The act of editing by adding an object to a collection.
 *
 * @see    http://schema.org/AddAction
 * @since  1.0
*/
abstract class TypeAddAction extends TypeUpdateAction
{
	/**
	 * The Schema.org Type Scope
	 *
	 * @var string
	 */
	protected static $scope = 'https://schema.org/AddAction';
}
