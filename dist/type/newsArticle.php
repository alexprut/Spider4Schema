<?php
/**
 * A news article.
 *
 * @see    http://schema.org/NewsArticle
*/
abstract class TypeNewsArticle extends TypeArticle
{
	/**
	 * The Schema.org Type Scope
	 *
	 * @var string
	 */
	protected static $scope = 'https://schema.org/NewsArticle';

	/**
	 * The location where the NewsArticle was produced.
	 * Expected Type: Text
	 * 
	 * @var	array
	 */
	protected static $dateline = array('value' => 'dateline',
		'expectedTypes' => array('Text')
	);

	/**
	 * The number of the column in which the NewsArticle appears in the print edition.
	 * Expected Type: Text
	 * 
	 * @var	array
	 */
	protected static $printColumn = array('value' => 'printColumn',
		'expectedTypes' => array('Text')
	);

	/**
	 * The edition of the print product in which the NewsArticle appears.
	 * Expected Type: Text
	 * 
	 * @var	array
	 */
	protected static $printEdition = array('value' => 'printEdition',
		'expectedTypes' => array('Text')
	);

	/**
	 * If this NewsArticle appears in print, this field indicates the name of the page on which the article is found. Please note that this field is intended for the exact page name (e.g. A5, B18).
	 * Expected Type: Text
	 * 
	 * @var	array
	 */
	protected static $printPage = array('value' => 'printPage',
		'expectedTypes' => array('Text')
	);

	/**
	 * If this NewsArticle appears in print, this field indicates the print section in which the article appeared.
	 * Expected Type: Text
	 * 
	 * @var	array
	 */
	protected static $printSection = array('value' => 'printSection',
		'expectedTypes' => array('Text')
	);

	/**
	 * Return the 'dateline' Property value
	 *
	 * @return	string
	 */
	public static function pDateline()
	{
		return self::getValue(self::$dateline);
	}

	/**
	 * Return the 'printColumn' Property value
	 *
	 * @return	string
	 */
	public static function pPrintColumn()
	{
		return self::getValue(self::$printColumn);
	}

	/**
	 * Return the 'printEdition' Property value
	 *
	 * @return	string
	 */
	public static function pPrintEdition()
	{
		return self::getValue(self::$printEdition);
	}

	/**
	 * Return the 'printPage' Property value
	 *
	 * @return	string
	 */
	public static function pPrintPage()
	{
		return self::getValue(self::$printPage);
	}

	/**
	 * Return the 'printSection' Property value
	 *
	 * @return	string
	 */
	public static function pPrintSection()
	{
		return self::getValue(self::$printSection);
	}
}
