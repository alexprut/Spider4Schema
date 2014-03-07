<?php
/**
 * The act of consuming dynamic/moving visual content.
 *
 * @see    http://schema.org/WatchAction
*/
abstract class TypeWatchAction extends TypeConsumeAction
{
	/**
	 * The Schema.org Type Scope
	 *
	 * @var string
	 */
	protected static $scope = 'https://schema.org/WatchAction';
}
