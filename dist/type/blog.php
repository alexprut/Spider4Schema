<?php
/**
 * A blog.
 *
 * @see    http://schema.org/Blog
*/
abstract class TypeBlog extends TypeCreativeWork
{
	/**
	 * The Schema.org Type Scope
	 *
	 * @var string
	 */
	protected static $scope = 'https://schema.org/Blog';

	/**
	 * A posting that is part of this blog. Supersedes blogPosts.
	 * Expected Type: BlogPosting
	 * 
	 * @var	array
	 */
	protected static $blogPost = array('value' => 'blogPost',
		'expectedTypes' => array('BlogPosting')
	);

	/**
	 * Return the 'blogPost' Property value
	 *
	 * @return	string
	 */
	public static function pBlogPost()
	{
		return self::getValue(self::$blogPost);
	}
}
