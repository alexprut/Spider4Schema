<?php
/**
 * The act of downloading an object.
 *
 * @see    http://schema.org/DownloadAction
*/
abstract class TypeDownloadAction extends TypeTransferAction
{
	/**
	 * The Schema.org Type Scope
	 *
	 * @var string
	 */
	protected static $scope = 'https://schema.org/DownloadAction';
}
