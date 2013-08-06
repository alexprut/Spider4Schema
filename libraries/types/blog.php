<?php
/**
 * @package     Joomla.Platform
 * @subpackage  Microdata
 *
 * @copyright   Copyright (C) 2005 - 2013 Open Source Matters, Inc. All rights reserved.
 * @license     GNU General Public License version 2 or later; see LICENSE
 */

defined("JPATH_PLATFORM") or die;

/**
 * A blog
 *
 * @package     Joomla.Platform
 * @subpackage  Microdata
 *
 * @see         http://schema.org/Blog
 * @since       13.1
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
