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
 * A review of an item - for example, a restaurant, movie, or store.
 *
 * @package     Joomla.Platform
 * @subpackage  Microdata
 *
 * @see         http://schema.org/Review
 * @since       13.1
*/
abstract class TypeReview extends TypeCreativeWork
{
	/**
	 * The Schema.org Type Scope
	 *
	 * @var string
	 */
	protected static $scope = 'https://schema.org/Review';

	/**
	 * The item that is being reviewed/rated.
	 * Expected Type: Thing
	 * 
	 * @var	array
	 */
	protected static $itemReviewed = array('value' => 'itemReviewed',
		'expectedTypes' => array('Thing')
	);

	/**
	 * The actual body of the review
	 * Expected Type: Text
	 * 
	 * @var	array
	 */
	protected static $reviewBody = array('value' => 'reviewBody',
		'expectedTypes' => array('Text')
	);

	/**
	 * The rating given in this review. Note that reviews can themselves be rated. The reviewRating applies to rating given by the review. The aggregateRating property applies to the review itself, as a creative work.
	 * Expected Type: Rating
	 * 
	 * @var	array
	 */
	protected static $reviewRating = array('value' => 'reviewRating',
		'expectedTypes' => array('Rating')
	);

	/**
	 * Return the 'itemReviewed' Property value
	 *
	 * @return	string
	 */
	public static function pItemReviewed()
	{
		return self::getValue(self::$itemReviewed);
	}

	/**
	 * Return the 'reviewBody' Property value
	 *
	 * @return	string
	 */
	public static function pReviewBody()
	{
		return self::getValue(self::$reviewBody);
	}

	/**
	 * Return the 'reviewRating' Property value
	 *
	 * @return	string
	 */
	public static function pReviewRating()
	{
		return self::getValue(self::$reviewRating);
	}
}
