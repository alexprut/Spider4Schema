<?php
/**
 * A blog
 *
 * @see    http://schema.org/Blog
 * @since  1.0
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
	 * A posting that is part of this blog.
	 * Expected Type: BlogPosting
	 * 
	 * @var	array
	 */
	protected static $blogPost = array('value' => 'blogPost',
		'expectedTypes' => array('BlogPosting')
	);

	/**
	 * The postings that are part of this blog (legacy spelling; see singular form, blogPost).
	 * Expected Type: BlogPosting
	 * 
	 * @var	array
	 */
	protected static $blogPosts = array('value' => 'blogPosts',
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

	/**
	 * Return the 'blogPosts' Property value
	 *
	 * @return	string
	 */
	public static function pBlogPosts()
	{
		return self::getValue(self::$blogPosts);
	}
}
