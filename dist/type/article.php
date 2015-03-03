<?php
/**
 * An article, such as a news article or piece of investigative report. Newspapers and magazines have articles of many different types and this is intended to cover them all. See also blog post.
 *
 * @see    http://schema.org/Article
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
	 * The page on which the work ends; for example "138" or "xvi".
	 * Expected Type: Text, Integer
	 * 
	 * @var	array
	 */
	protected static $pageEnd = array('value' => 'pageEnd',
		'expectedTypes' => array('Text', 'Integer')
	);

	/**
	 * The page on which the work starts; for example "135" or "xiii".
	 * Expected Type: Text, Integer
	 * 
	 * @var	array
	 */
	protected static $pageStart = array('value' => 'pageStart',
		'expectedTypes' => array('Text', 'Integer')
	);

	/**
	 * Any description of pages that is not separated into pageStart and pageEnd; for example, "1-6, 9, 55" or "10-12, 46-49".
	 * Expected Type: Text
	 * 
	 * @var	array
	 */
	protected static $pagination = array('value' => 'pagination',
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
	 * Return the 'pageEnd' Property value
	 *
	 * @return	string
	 */
	public static function pPageEnd()
	{
		return self::getValue(self::$pageEnd);
	}

	/**
	 * Return the 'pageStart' Property value
	 *
	 * @return	string
	 */
	public static function pPageStart()
	{
		return self::getValue(self::$pageStart);
	}

	/**
	 * Return the 'pagination' Property value
	 *
	 * @return	string
	 */
	public static function pPagination()
	{
		return self::getValue(self::$pagination);
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
