<?php
/**
 * An agent bookmarks/flags/labels/tags/marks an object.
 *
 * @see    http://schema.org/BookmarkAction
 * @since  1.0
*/
abstract class TypeBookmarkAction extends TypeOrganizeAction
{
	/**
	 * The Schema.org Type Scope
	 *
	 * @var string
	 */
	protected static $scope = 'https://schema.org/BookmarkAction';
}
