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
 * The most generic kind of creative work, including books, movies, photographs, software programs, etc.
 *
 * @package     Joomla.Platform
 * @subpackage  Microdata
 *
 * @see         http://schema.org/CreativeWork
 * @since       13.1
*/
abstract class TypeCreativeWork extends TypeThing
{
	/**
	 * The Schema.org Type Scope
	 *
	 * @var string
	 */
	protected static $scope = 'https://schema.org/CreativeWork';

	/**
	 * The subject matter of the content.
	 * Expected Type: Thing
	 * 
	 * @var	array
	 */
	protected static $about = array('value' => 'about',
		'expectedTypes' => array('Thing')
	);

	/**
	 * Specifies the Person that is legally accountable for the CreativeWork.
	 * Expected Type: Person
	 * 
	 * @var	array
	 */
	protected static $accountablePerson = array('value' => 'accountablePerson',
		'expectedTypes' => array('Person')
	);

	/**
	 * The overall rating, based on a collection of reviews or ratings, of the item.
	 * Expected Type: AggregateRating
	 * 
	 * @var	array
	 */
	protected static $aggregateRating = array('value' => 'aggregateRating',
		'expectedTypes' => array('AggregateRating')
	);

	/**
	 * A secondary title of the CreativeWork.
	 * Expected Type: Text
	 * 
	 * @var	array
	 */
	protected static $alternativeHeadline = array('value' => 'alternativeHeadline',
		'expectedTypes' => array('Text')
	);

	/**
	 * The media objects that encode this creative work. This property is a synonym for encodings.
	 * Expected Type: MediaObject
	 * 
	 * @var	array
	 */
	protected static $associatedMedia = array('value' => 'associatedMedia',
		'expectedTypes' => array('MediaObject')
	);

	/**
	 * The intended audience of the item, i.e. the group for whom the item was created.
	 * Expected Type: Audience
	 * 
	 * @var	array
	 */
	protected static $audience = array('value' => 'audience',
		'expectedTypes' => array('Audience')
	);

	/**
	 * An embedded audio object.
	 * Expected Type: AudioObject
	 * 
	 * @var	array
	 */
	protected static $audio = array('value' => 'audio',
		'expectedTypes' => array('AudioObject')
	);

	/**
	 * The author of this content. Please note that author is special in that HTML 5 provides a special mechanism for indicating authorship via the rel tag. That is equivalent to this and may be used interchangeably.
	 * Expected Type: Organization', 'Person
	 * 
	 * @var	array
	 */
	protected static $author = array('value' => 'author',
		'expectedTypes' => array('Organization', 'Person')
	);

	/**
	 * An award won by this person or for this creative work.
	 * Expected Type: Text
	 * 
	 * @var	array
	 */
	protected static $award = array('value' => 'award',
		'expectedTypes' => array('Text')
	);

	/**
	 * Awards won by this person or for this creative work. (legacy spelling; see singular form, award)
	 * Expected Type: Text
	 * 
	 * @var	array
	 */
	protected static $awards = array('value' => 'awards',
		'expectedTypes' => array('Text')
	);

	/**
	 * A citation or reference to another creative work, such as another publication, web page, scholarly article, etc.
	 * Expected Type: CreativeWork', 'Text
	 * 
	 * @var	array
	 */
	protected static $citation = array('value' => 'citation',
		'expectedTypes' => array('CreativeWork', 'Text')
	);

	/**
	 * Comments, typically from users, on this CreativeWork.
	 * Expected Type: UserComments
	 * 
	 * @var	array
	 */
	protected static $comment = array('value' => 'comment',
		'expectedTypes' => array('UserComments')
	);

	/**
	 * The location of the content.
	 * Expected Type: Place
	 * 
	 * @var	array
	 */
	protected static $contentLocation = array('value' => 'contentLocation',
		'expectedTypes' => array('Place')
	);

	/**
	 * Official rating of a piece of content—for example,'MPAA PG-13'.
	 * Expected Type: Text
	 * 
	 * @var	array
	 */
	protected static $contentRating = array('value' => 'contentRating',
		'expectedTypes' => array('Text')
	);

	/**
	 * A secondary contributor to the CreativeWork.
	 * Expected Type: Organization', 'Person
	 * 
	 * @var	array
	 */
	protected static $contributor = array('value' => 'contributor',
		'expectedTypes' => array('Organization', 'Person')
	);

	/**
	 * The party holding the legal copyright to the CreativeWork.
	 * Expected Type: Organization', 'Person
	 * 
	 * @var	array
	 */
	protected static $copyrightHolder = array('value' => 'copyrightHolder',
		'expectedTypes' => array('Organization', 'Person')
	);

	/**
	 * The year during which the claimed copyright for the CreativeWork was first asserted.
	 * Expected Type: Number
	 * 
	 * @var	array
	 */
	protected static $copyrightYear = array('value' => 'copyrightYear',
		'expectedTypes' => array('Number')
	);

	/**
	 * The creator/author of this CreativeWork or UserComments. This is the same as the Author property for CreativeWork.
	 * Expected Type: Organization', 'Person
	 * 
	 * @var	array
	 */
	protected static $creator = array('value' => 'creator',
		'expectedTypes' => array('Organization', 'Person')
	);

	/**
	 * The date on which the CreativeWork was created.
	 * Expected Type: Date
	 * 
	 * @var	array
	 */
	protected static $dateCreated = array('value' => 'dateCreated',
		'expectedTypes' => array('Date')
	);

	/**
	 * The date on which the CreativeWork was most recently modified.
	 * Expected Type: Date
	 * 
	 * @var	array
	 */
	protected static $dateModified = array('value' => 'dateModified',
		'expectedTypes' => array('Date')
	);

	/**
	 * Date of first broadcast/publication.
	 * Expected Type: Date
	 * 
	 * @var	array
	 */
	protected static $datePublished = array('value' => 'datePublished',
		'expectedTypes' => array('Date')
	);

	/**
	 * A link to the page containing the comments of the CreativeWork.
	 * Expected Type: URL
	 * 
	 * @var	array
	 */
	protected static $discussionUrl = array('value' => 'discussionUrl',
		'expectedTypes' => array('URL')
	);

	/**
	 * Specifies the Person who edited the CreativeWork.
	 * Expected Type: Person
	 * 
	 * @var	array
	 */
	protected static $editor = array('value' => 'editor',
		'expectedTypes' => array('Person')
	);

	/**
	 * An alignment to an established educational framework.
	 * Expected Type: AlignmentObject
	 * 
	 * @var	array
	 */
	protected static $educationalAlignment = array('value' => 'educationalAlignment',
		'expectedTypes' => array('AlignmentObject')
	);

	/**
	 * The purpose of a work in the context of education; for example, 'assignment', 'group work'.
	 * Expected Type: Text
	 * 
	 * @var	array
	 */
	protected static $educationalUse = array('value' => 'educationalUse',
		'expectedTypes' => array('Text')
	);

	/**
	 * A media object that encode this CreativeWork.
	 * Expected Type: MediaObject
	 * 
	 * @var	array
	 */
	protected static $encoding = array('value' => 'encoding',
		'expectedTypes' => array('MediaObject')
	);

	/**
	 * The media objects that encode this creative work (legacy spelling; see singular form, encoding).
	 * Expected Type: MediaObject
	 * 
	 * @var	array
	 */
	protected static $encodings = array('value' => 'encodings',
		'expectedTypes' => array('MediaObject')
	);

	/**
	 * Genre of the creative work
	 * Expected Type: Text
	 * 
	 * @var	array
	 */
	protected static $genre = array('value' => 'genre',
		'expectedTypes' => array('Text')
	);

	/**
	 * Headline of the article
	 * Expected Type: Text
	 * 
	 * @var	array
	 */
	protected static $headline = array('value' => 'headline',
		'expectedTypes' => array('Text')
	);

	/**
	 * The language of the content. please use one of the language codes from the IETF BCP 47 standard.
	 * Expected Type: Text
	 * 
	 * @var	array
	 */
	protected static $inLanguage = array('value' => 'inLanguage',
		'expectedTypes' => array('Text')
	);

	/**
	 * A count of a specific user interactions with this item—for example, 20 UserLikes, 5 UserComments, or 300 UserDownloads. The user interaction type should be one of the sub types of UserInteraction.
	 * Expected Type: Text
	 * 
	 * @var	array
	 */
	protected static $interactionCount = array('value' => 'interactionCount',
		'expectedTypes' => array('Text')
	);

	/**
	 * The predominant mode of learning supported by the learning resource. Acceptable values are 'active', 'expositive', or 'mixed'.
	 * Expected Type: Text
	 * 
	 * @var	array
	 */
	protected static $interactivityType = array('value' => 'interactivityType',
		'expectedTypes' => array('Text')
	);

	/**
	 * A resource that was used in the creation of this resource. This term can be repeated for multiple sources. For example, http://example.com/great-multiplication-intro.html
	 * Expected Type: URL
	 * 
	 * @var	array
	 */
	protected static $isBasedOnUrl = array('value' => 'isBasedOnUrl',
		'expectedTypes' => array('URL')
	);

	/**
	 * Indicates whether this content is family friendly.
	 * Expected Type: Boolean
	 * 
	 * @var	array
	 */
	protected static $isFamilyFriendly = array('value' => 'isFamilyFriendly',
		'expectedTypes' => array('Boolean')
	);

	/**
	 * The keywords/tags used to describe this content.
	 * Expected Type: Text
	 * 
	 * @var	array
	 */
	protected static $keywords = array('value' => 'keywords',
		'expectedTypes' => array('Text')
	);

	/**
	 * The predominant type or kind characterizing the learning resource. For example, 'presentation', 'handout'.
	 * Expected Type: Text
	 * 
	 * @var	array
	 */
	protected static $learningResourceType = array('value' => 'learningResourceType',
		'expectedTypes' => array('Text')
	);

	/**
	 * Indicates that the CreativeWork contains a reference to, but is not necessarily about a concept.
	 * Expected Type: Thing
	 * 
	 * @var	array
	 */
	protected static $mentions = array('value' => 'mentions',
		'expectedTypes' => array('Thing')
	);

	/**
	 * An offer to sell this item—for example, an offer to sell a product, the DVD of a movie, or tickets to an event.
	 * Expected Type: Offer
	 * 
	 * @var	array
	 */
	protected static $offers = array('value' => 'offers',
		'expectedTypes' => array('Offer')
	);

	/**
	 * Specifies the Person or Organization that distributed the CreativeWork.
	 * Expected Type: Organization', 'Person
	 * 
	 * @var	array
	 */
	protected static $provider = array('value' => 'provider',
		'expectedTypes' => array('Organization', 'Person')
	);

	/**
	 * The publisher of the creative work.
	 * Expected Type: Organization
	 * 
	 * @var	array
	 */
	protected static $publisher = array('value' => 'publisher',
		'expectedTypes' => array('Organization')
	);

	/**
	 * Link to page describing the editorial principles of the organization primarily responsible for the creation of the CreativeWork.
	 * Expected Type: URL
	 * 
	 * @var	array
	 */
	protected static $publishingPrinciples = array('value' => 'publishingPrinciples',
		'expectedTypes' => array('URL')
	);

	/**
	 * A review of the item.
	 * Expected Type: Review
	 * 
	 * @var	array
	 */
	protected static $review = array('value' => 'review',
		'expectedTypes' => array('Review')
	);

	/**
	 * Review of the item (legacy spelling; see singular form, review).
	 * Expected Type: Review
	 * 
	 * @var	array
	 */
	protected static $reviews = array('value' => 'reviews',
		'expectedTypes' => array('Review')
	);

	/**
	 * The Organization on whose behalf the creator was working.
	 * Expected Type: Organization
	 * 
	 * @var	array
	 */
	protected static $sourceOrganization = array('value' => 'sourceOrganization',
		'expectedTypes' => array('Organization')
	);

	/**
	 * The textual content of this CreativeWork.
	 * Expected Type: Text
	 * 
	 * @var	array
	 */
	protected static $text = array('value' => 'text',
		'expectedTypes' => array('Text')
	);

	/**
	 * A thumbnail image relevant to the Thing.
	 * Expected Type: URL
	 * 
	 * @var	array
	 */
	protected static $thumbnailUrl = array('value' => 'thumbnailUrl',
		'expectedTypes' => array('URL')
	);

	/**
	 * Approximate or typical time it takes to work with or through this learning resource for the typical intended target audience, e.g. 'P30M', 'P1H25M'.
	 * Expected Type: Duration
	 * 
	 * @var	array
	 */
	protected static $timeRequired = array('value' => 'timeRequired',
		'expectedTypes' => array('Duration')
	);

	/**
	 * The typical range of ages the content's intendedEndUser, for example '7-9', '11-'.
	 * Expected Type: Text
	 * 
	 * @var	array
	 */
	protected static $typicalAgeRange = array('value' => 'typicalAgeRange',
		'expectedTypes' => array('Text')
	);

	/**
	 * The version of the CreativeWork embodied by a specified resource.
	 * Expected Type: Number
	 * 
	 * @var	array
	 */
	protected static $version = array('value' => 'version',
		'expectedTypes' => array('Number')
	);

	/**
	 * An embedded video object.
	 * Expected Type: VideoObject
	 * 
	 * @var	array
	 */
	protected static $video = array('value' => 'video',
		'expectedTypes' => array('VideoObject')
	);

	/**
	 * Return the 'about' Property value
	 *
	 * @return	string
	 */
	public static function pAbout()
	{
		return self::getValue(self::$about);
	}

	/**
	 * Return the 'accountablePerson' Property value
	 *
	 * @return	string
	 */
	public static function pAccountablePerson()
	{
		return self::getValue(self::$accountablePerson);
	}

	/**
	 * Return the 'aggregateRating' Property value
	 *
	 * @return	string
	 */
	public static function pAggregateRating()
	{
		return self::getValue(self::$aggregateRating);
	}

	/**
	 * Return the 'alternativeHeadline' Property value
	 *
	 * @return	string
	 */
	public static function pAlternativeHeadline()
	{
		return self::getValue(self::$alternativeHeadline);
	}

	/**
	 * Return the 'associatedMedia' Property value
	 *
	 * @return	string
	 */
	public static function pAssociatedMedia()
	{
		return self::getValue(self::$associatedMedia);
	}

	/**
	 * Return the 'audience' Property value
	 *
	 * @return	string
	 */
	public static function pAudience()
	{
		return self::getValue(self::$audience);
	}

	/**
	 * Return the 'audio' Property value
	 *
	 * @return	string
	 */
	public static function pAudio()
	{
		return self::getValue(self::$audio);
	}

	/**
	 * Return the 'author' Property value
	 *
	 * @return	string
	 */
	public static function pAuthor()
	{
		return self::getValue(self::$author);
	}

	/**
	 * Return the 'award' Property value
	 *
	 * @return	string
	 */
	public static function pAward()
	{
		return self::getValue(self::$award);
	}

	/**
	 * Return the 'awards' Property value
	 *
	 * @return	string
	 */
	public static function pAwards()
	{
		return self::getValue(self::$awards);
	}

	/**
	 * Return the 'citation' Property value
	 *
	 * @return	string
	 */
	public static function pCitation()
	{
		return self::getValue(self::$citation);
	}

	/**
	 * Return the 'comment' Property value
	 *
	 * @return	string
	 */
	public static function pComment()
	{
		return self::getValue(self::$comment);
	}

	/**
	 * Return the 'contentLocation' Property value
	 *
	 * @return	string
	 */
	public static function pContentLocation()
	{
		return self::getValue(self::$contentLocation);
	}

	/**
	 * Return the 'contentRating' Property value
	 *
	 * @return	string
	 */
	public static function pContentRating()
	{
		return self::getValue(self::$contentRating);
	}

	/**
	 * Return the 'contributor' Property value
	 *
	 * @return	string
	 */
	public static function pContributor()
	{
		return self::getValue(self::$contributor);
	}

	/**
	 * Return the 'copyrightHolder' Property value
	 *
	 * @return	string
	 */
	public static function pCopyrightHolder()
	{
		return self::getValue(self::$copyrightHolder);
	}

	/**
	 * Return the 'copyrightYear' Property value
	 *
	 * @return	string
	 */
	public static function pCopyrightYear()
	{
		return self::getValue(self::$copyrightYear);
	}

	/**
	 * Return the 'creator' Property value
	 *
	 * @return	string
	 */
	public static function pCreator()
	{
		return self::getValue(self::$creator);
	}

	/**
	 * Return the 'dateCreated' Property value
	 *
	 * @return	string
	 */
	public static function pDateCreated()
	{
		return self::getValue(self::$dateCreated);
	}

	/**
	 * Return the 'dateModified' Property value
	 *
	 * @return	string
	 */
	public static function pDateModified()
	{
		return self::getValue(self::$dateModified);
	}

	/**
	 * Return the 'datePublished' Property value
	 *
	 * @return	string
	 */
	public static function pDatePublished()
	{
		return self::getValue(self::$datePublished);
	}

	/**
	 * Return the 'discussionUrl' Property value
	 *
	 * @return	string
	 */
	public static function pDiscussionUrl()
	{
		return self::getValue(self::$discussionUrl);
	}

	/**
	 * Return the 'editor' Property value
	 *
	 * @return	string
	 */
	public static function pEditor()
	{
		return self::getValue(self::$editor);
	}

	/**
	 * Return the 'educationalAlignment' Property value
	 *
	 * @return	string
	 */
	public static function pEducationalAlignment()
	{
		return self::getValue(self::$educationalAlignment);
	}

	/**
	 * Return the 'educationalUse' Property value
	 *
	 * @return	string
	 */
	public static function pEducationalUse()
	{
		return self::getValue(self::$educationalUse);
	}

	/**
	 * Return the 'encoding' Property value
	 *
	 * @return	string
	 */
	public static function pEncoding()
	{
		return self::getValue(self::$encoding);
	}

	/**
	 * Return the 'encodings' Property value
	 *
	 * @return	string
	 */
	public static function pEncodings()
	{
		return self::getValue(self::$encodings);
	}

	/**
	 * Return the 'genre' Property value
	 *
	 * @return	string
	 */
	public static function pGenre()
	{
		return self::getValue(self::$genre);
	}

	/**
	 * Return the 'headline' Property value
	 *
	 * @return	string
	 */
	public static function pHeadline()
	{
		return self::getValue(self::$headline);
	}

	/**
	 * Return the 'inLanguage' Property value
	 *
	 * @return	string
	 */
	public static function pInLanguage()
	{
		return self::getValue(self::$inLanguage);
	}

	/**
	 * Return the 'interactionCount' Property value
	 *
	 * @return	string
	 */
	public static function pInteractionCount()
	{
		return self::getValue(self::$interactionCount);
	}

	/**
	 * Return the 'interactivityType' Property value
	 *
	 * @return	string
	 */
	public static function pInteractivityType()
	{
		return self::getValue(self::$interactivityType);
	}

	/**
	 * Return the 'isBasedOnUrl' Property value
	 *
	 * @return	string
	 */
	public static function pIsBasedOnUrl()
	{
		return self::getValue(self::$isBasedOnUrl);
	}

	/**
	 * Return the 'isFamilyFriendly' Property value
	 *
	 * @return	string
	 */
	public static function pIsFamilyFriendly()
	{
		return self::getValue(self::$isFamilyFriendly);
	}

	/**
	 * Return the 'keywords' Property value
	 *
	 * @return	string
	 */
	public static function pKeywords()
	{
		return self::getValue(self::$keywords);
	}

	/**
	 * Return the 'learningResourceType' Property value
	 *
	 * @return	string
	 */
	public static function pLearningResourceType()
	{
		return self::getValue(self::$learningResourceType);
	}

	/**
	 * Return the 'mentions' Property value
	 *
	 * @return	string
	 */
	public static function pMentions()
	{
		return self::getValue(self::$mentions);
	}

	/**
	 * Return the 'offers' Property value
	 *
	 * @return	string
	 */
	public static function pOffers()
	{
		return self::getValue(self::$offers);
	}

	/**
	 * Return the 'provider' Property value
	 *
	 * @return	string
	 */
	public static function pProvider()
	{
		return self::getValue(self::$provider);
	}

	/**
	 * Return the 'publisher' Property value
	 *
	 * @return	string
	 */
	public static function pPublisher()
	{
		return self::getValue(self::$publisher);
	}

	/**
	 * Return the 'publishingPrinciples' Property value
	 *
	 * @return	string
	 */
	public static function pPublishingPrinciples()
	{
		return self::getValue(self::$publishingPrinciples);
	}

	/**
	 * Return the 'review' Property value
	 *
	 * @return	string
	 */
	public static function pReview()
	{
		return self::getValue(self::$review);
	}

	/**
	 * Return the 'reviews' Property value
	 *
	 * @return	string
	 */
	public static function pReviews()
	{
		return self::getValue(self::$reviews);
	}

	/**
	 * Return the 'sourceOrganization' Property value
	 *
	 * @return	string
	 */
	public static function pSourceOrganization()
	{
		return self::getValue(self::$sourceOrganization);
	}

	/**
	 * Return the 'text' Property value
	 *
	 * @return	string
	 */
	public static function pText()
	{
		return self::getValue(self::$text);
	}

	/**
	 * Return the 'thumbnailUrl' Property value
	 *
	 * @return	string
	 */
	public static function pThumbnailUrl()
	{
		return self::getValue(self::$thumbnailUrl);
	}

	/**
	 * Return the 'timeRequired' Property value
	 *
	 * @return	string
	 */
	public static function pTimeRequired()
	{
		return self::getValue(self::$timeRequired);
	}

	/**
	 * Return the 'typicalAgeRange' Property value
	 *
	 * @return	string
	 */
	public static function pTypicalAgeRange()
	{
		return self::getValue(self::$typicalAgeRange);
	}

	/**
	 * Return the 'version' Property value
	 *
	 * @return	string
	 */
	public static function pVersion()
	{
		return self::getValue(self::$version);
	}

	/**
	 * Return the 'video' Property value
	 *
	 * @return	string
	 */
	public static function pVideo()
	{
		return self::getValue(self::$video);
	}
}
