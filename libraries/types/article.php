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
 * An article, such as a news article or piece of investigative report. Newspapers and magazines have articles of many different types and this is intended to cover them all.
 *
 * @package     Joomla.Platform
 * @subpackage  Microdata
 *
 * @see         http://schema.org/Article
 * @since       13.1
*/
abstract class TypeArticle extends TypeCreativeWork
{
	/**
	 * The Schema.org Type Scope
	 *
	 * @var string
	 */
	protected static $scope = 'https://schema.org/Article';

	/**
	 * The actual body of the article.
	 * Expected Type: Text
	 * 
	 * @var	array
	 */
	protected static $articleBody = array('value' => 'articleBody',
		'expectedTypes' => array('Text')
	);

	/**
	 * Articles may belong to one or more 'sections' in a magazine or newspaper, such as Sports, Lifestyle, etc.
	 * Expected Type: Text
	 * 
	 * @var	array
	 */
	protected static $articleSection = array('value' => 'articleSection',
		'expectedTypes' => array('Text')
	);

	/**
	 * The number of words in the text of the Article.
	 * Expected Type: Integer
	 * 
	 * @var	array
	 */
	protected static $wordCount = array('value' => 'wordCount',
		'expectedTypes' => array('Integer')
	);

	/**
	 * Return the 'articleBody' Property value
	 *
	 * @return	string
	 */
	public static function pArticleBody()
	{
		return self::getValue(self::$articleBody);
	}

	/**
	 * Return the 'articleSection' Property value
	 *
	 * @return	string
	 */
	public static function pArticleSection()
	{
		return self::getValue(self::$articleSection);
	}

	/**
	 * Return the 'wordCount' Property value
	 *
	 * @return	string
	 */
	public static function pWordCount()
	{
		return self::getValue(self::$wordCount);
	}
}
