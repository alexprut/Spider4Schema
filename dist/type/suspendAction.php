<?php
/**
 * The act of momentarily pausing a device or application (e.g. pause music playback or pause a timer).
 *
 * @see    http://schema.org/SuspendAction
*/
abstract class TypeSuspendAction extends TypeControlAction
{
	/**
	 * The Schema.org Type Scope
	 *
	 * @var string
	 */
	protected static $scope = 'https://schema.org/SuspendAction';
}
