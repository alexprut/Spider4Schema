<?php
/**
 * The act of starting or activating a device or application (e.g. starting a timer or turning on a flashlight).
 *
 * @see    http://schema.org/ActivateAction
*/
abstract class TypeActivateAction extends TypeControlAction
{
	/**
	 * The Schema.org Type Scope
	 *
	 * @var string
	 */
	protected static $scope = 'https://schema.org/ActivateAction';
}
