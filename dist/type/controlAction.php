<?php
/**
 * An agent controls a device or application.
 *
 * @see    http://schema.org/ControlAction
*/
abstract class TypeControlAction extends TypeAction
{
	/**
	 * The Schema.org Type Scope
	 *
	 * @var string
	 */
	protected static $scope = 'https://schema.org/ControlAction';
}
