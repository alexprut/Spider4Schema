<?php
/**
 * User interaction: Block this content.
 *
 * @see    http://schema.org/UserBlocks
*/
abstract class TypeUserBlocks extends TypeUserInteraction
{
	/**
	 * The Schema.org Type Scope
	 *
	 * @var string
	 */
	protected static $scope = 'https://schema.org/UserBlocks';
}
