<?php
/**
 * A review of an item - for example, of a restaurant, movie, or store.
 *
 * @see    http://schema.org/Review
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
	 * The actual body of the review.
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
