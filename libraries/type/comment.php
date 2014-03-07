<?php
/**
 * A comment on an item - for example, a comment on a blog post. The comment's content is expressed via the "text" property, and its topic via "about", properties shared with all CreativeWorks.
 *
 * @see    http://schema.org/Comment
*/
abstract class TypeComment extends TypeCreativeWork
{
	/**
	 * The Schema.org Type Scope
	 *
	 * @var string
	 */
	protected static $scope = 'https://schema.org/Comment';
}
