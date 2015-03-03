<?php
/**
 * A dataset in downloadable form.
 *
 * @see    http://schema.org/DataDownload
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
