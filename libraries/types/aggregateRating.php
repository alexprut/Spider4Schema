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
 * The average rating based on multiple ratings or reviews.
 *
 * @package     Joomla.Platform
 * @subpackage  Microdata
 *
 * @see         http://schema.org/AggregateRating
 * @since       13.1
*/
abstract class TypeAggregateRating extends TypeRating
{
	/**
	 * The Schema.org Type Scope
	 *
	 * @var string
	 */
	protected static $scope = 'https://schema.org/AggregateRating';

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
	 * The count of total number of ratings.
	 * Expected Type: Number
	 * 
	 * @var	array
	 */
	protected static $ratingCount = array('value' => 'ratingCount',
		'expectedTypes' => array('Number')
	);

	/**
	 * The count of total number of reviews.
	 * Expected Type: Number
	 * 
	 * @var	array
	 */
	protected static $reviewCount = array('value' => 'reviewCount',
		'expectedTypes' => array('Number')
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
	 * Return the 'ratingCount' Property value
	 *
	 * @return	string
	 */
	public static function pRatingCount()
	{
		return self::getValue(self::$ratingCount);
	}

	/**
	 * Return the 'reviewCount' Property value
	 *
	 * @return	string
	 */
	public static function pReviewCount()
	{
		return self::getValue(self::$reviewCount);
	}
}
