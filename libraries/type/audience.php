<?php
/**
 * Intended audience for an item, i.e. the group for whom the item was created.
 *
 * @see    http://schema.org/Audience
 * @since  1.0
*/
abstract class TypeAudience extends TypeIntangible
{
	/**
	 * The Schema.org Type Scope
	 *
	 * @var string
	 */
	protected static $scope = 'https://schema.org/Audience';
}
