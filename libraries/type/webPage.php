<?php
/**
 * A web page. Every web page is implicitly assumed to be declared to be of type WebPage, so the various properties about that webpage, such as breadcrumb may be used. We recommend explicit declaration if these properties are specified, but if they are found outside of an itemscope, they will be assumed to be about the page
 *
 * @see    http://schema.org/WebPage
 * @since  1.0
*/
abstract class TypeWebPage extends TypeCreativeWork
{
	/**
	 * The Schema.org Type Scope
	 *
	 * @var string
	 */
	protected static $scope = 'https://schema.org/WebPage';

	/**
	 * A set of links that can help a user understand and navigate a website hierarchy.
	 * Expected Type: Text
	 * 
	 * @var	array
	 */
	protected static $breadcrumb = array('value' => 'breadcrumb',
		'expectedTypes' => array('Text')
	);

	/**
	 * Indicates the collection or gallery to which the item belongs.
	 * Expected Type: CollectionPage
	 * 
	 * @var	array
	 */
	protected static $isPartOf = array('value' => 'isPartOf',
		'expectedTypes' => array('CollectionPage')
	);

	/**
	 * Date on which the content on this web page was last reviewed for accuracy and/or completeness.
	 * Expected Type: Date
	 * 
	 * @var	array
	 */
	protected static $lastReviewed = array('value' => 'lastReviewed',
		'expectedTypes' => array('Date')
	);

	/**
	 * Indicates if this web page element is the main subject of the page.
	 * Expected Type: WebPageElement
	 * 
	 * @var	array
	 */
	protected static $mainContentOfPage = array('value' => 'mainContentOfPage',
		'expectedTypes' => array('WebPageElement')
	);

	/**
	 * Indicates the main image on the page
	 * Expected Type: ImageObject
	 * 
	 * @var	array
	 */
	protected static $primaryImageOfPage = array('value' => 'primaryImageOfPage',
		'expectedTypes' => array('ImageObject')
	);

	/**
	 * A link related to this web page, for example to other related web pages.
	 * Expected Type: URL
	 * 
	 * @var	array
	 */
	protected static $relatedLink = array('value' => 'relatedLink',
		'expectedTypes' => array('URL')
	);

	/**
	 * People or organizations that have reviewed the content on this web page for accuracy and/or completeness.
	 * Expected Type: Organization, Person
	 * 
	 * @var	array
	 */
	protected static $reviewedBy = array('value' => 'reviewedBy',
		'expectedTypes' => array('Organization', 'Person')
	);

	/**
	 * One of the more significant URLs on the page. Typically, these are the non-navigation links that are clicked on the most.
	 * Expected Type: URL
	 * 
	 * @var	array
	 */
	protected static $significantLink = array('value' => 'significantLink',
		'expectedTypes' => array('URL')
	);

	/**
	 * The most significant URLs on the page. Typically, these are the non-navigation links that are clicked on the most (legacy spelling; see singular form, significantLink).
	 * Expected Type: URL
	 * 
	 * @var	array
	 */
	protected static $significantLinks = array('value' => 'significantLinks',
		'expectedTypes' => array('URL')
	);

	/**
	 * One of the domain specialities to which this web page's content applies.
	 * Expected Type: Specialty
	 * 
	 * @var	array
	 */
	protected static $specialty = array('value' => 'specialty',
		'expectedTypes' => array('Specialty')
	);

	/**
	 * Return the 'breadcrumb' Property value
	 *
	 * @return	string
	 */
	public static function pBreadcrumb()
	{
		return self::getValue(self::$breadcrumb);
	}

	/**
	 * Return the 'isPartOf' Property value
	 *
	 * @return	string
	 */
	public static function pIsPartOf()
	{
		return self::getValue(self::$isPartOf);
	}

	/**
	 * Return the 'lastReviewed' Property value
	 *
	 * @return	string
	 */
	public static function pLastReviewed()
	{
		return self::getValue(self::$lastReviewed);
	}

	/**
	 * Return the 'mainContentOfPage' Property value
	 *
	 * @return	string
	 */
	public static function pMainContentOfPage()
	{
		return self::getValue(self::$mainContentOfPage);
	}

	/**
	 * Return the 'primaryImageOfPage' Property value
	 *
	 * @return	string
	 */
	public static function pPrimaryImageOfPage()
	{
		return self::getValue(self::$primaryImageOfPage);
	}

	/**
	 * Return the 'relatedLink' Property value
	 *
	 * @return	string
	 */
	public static function pRelatedLink()
	{
		return self::getValue(self::$relatedLink);
	}

	/**
	 * Return the 'reviewedBy' Property value
	 *
	 * @return	string
	 */
	public static function pReviewedBy()
	{
		return self::getValue(self::$reviewedBy);
	}

	/**
	 * Return the 'significantLink' Property value
	 *
	 * @return	string
	 */
	public static function pSignificantLink()
	{
		return self::getValue(self::$significantLink);
	}

	/**
	 * Return the 'significantLinks' Property value
	 *
	 * @return	string
	 */
	public static function pSignificantLinks()
	{
		return self::getValue(self::$significantLinks);
	}

	/**
	 * Return the 'specialty' Property value
	 *
	 * @return	string
	 */
	public static function pSpecialty()
	{
		return self::getValue(self::$specialty);
	}
}
