<?php
/**
 * A short radio program or a segment/part of a radio program.
 *
 * @see    http://schema.org/RadioClip
*/
abstract class TypeRadioClip extends TypeClip
{
	/**
	 * The Schema.org Type Scope
	 *
	 * @var string
	 */
	protected static $scope = 'https://schema.org/RadioClip';
}
