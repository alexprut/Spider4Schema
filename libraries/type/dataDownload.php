<?php
/**
 * A dataset in downloadable form.
 *
 * @see    http://schema.org/DataDownload
 * @since  1.0
*/
abstract class TypeDataDownload extends TypeMediaObject
{
	/**
	 * The Schema.org Type Scope
	 *
	 * @var string
	 */
	protected static $scope = 'https://schema.org/DataDownload';
}
