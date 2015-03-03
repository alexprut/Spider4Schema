<?php
/**
 * The act of resuming a device or application which was formerly paused (e.g. resume music playback or resume a timer).
 *
 * @see    http://schema.org/ResumeAction
*/
abstract class TypeResumeAction extends TypeControlAction
{
	/**
	 * The Schema.org Type Scope
	 *
	 * @var string
	 */
	protected static $scope = 'https://schema.org/ResumeAction';
}
