<?php
/**
 * User interaction: Like an item.
 *
 * @see    http://schema.org/UserLikes
 * @since  1.0
*/
abstract class TypeUserLikes extends TypeUserInteraction
{
	/**
	 * The Schema.org Type Scope
	 *
	 * @var string
	 */
	protected static $scope = 'https://schema.org/UserLikes';
}
