<?php
/**
 * The act of consuming dynamic/moving visual content.
 *
 * @see    http://schema.org/WatchAction
 * @since  1.0
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
