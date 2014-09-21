<?php
/**
 * The act of producing a visual/graphical representation of an object, typically with a pen/pencil and paper as instruments.
 *
 * @see    http://schema.org/DrawAction
*/
abstract class TypeDrawAction extends TypeCreateAction
{
	/**
	 * The Schema.org Type Scope
	 *
	 * @var string
	 */
	protected static $scope = 'https://schema.org/DrawAction';
}
