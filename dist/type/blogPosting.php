<?php
/**
 * A blog post.
 *
 * @see    http://schema.org/BlogPosting
*/
abstract class TypeBlogPosting extends TypeArticle
{
	/**
	 * The Schema.org Type Scope
	 *
	 * @var string
	 */
	protected static $scope = 'https://schema.org/BlogPosting';
}
