<?php
/**
 * A short TV program or a segment/part of a TV program.
 *
 * @see    http://schema.org/TVClip
*/
abstract class TypeTVClip extends TypeClip
{
	/**
	 * The Schema.org Type Scope
	 *
	 * @var string
	 */
	protected static $scope = 'https://schema.org/TVClip';
}
