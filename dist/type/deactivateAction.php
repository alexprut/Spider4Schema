<?php
/**
 * The act of stopping or deactivating a device or application (e.g. stopping a timer or turning off a flashlight).
 *
 * @see    http://schema.org/DeactivateAction
*/
abstract class TypeDeactivateAction extends TypeControlAction
{
	/**
	 * The Schema.org Type Scope
	 *
	 * @var string
	 */
	protected static $scope = 'https://schema.org/DeactivateAction';
}
