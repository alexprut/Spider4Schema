<?php
/**
 * The rating of the video.
 *
 * @see    http://schema.org/Rating
 * @since  1.0
*/
abstract class TypeRating extends TypeIntangible
{
	/**
	 * The Schema.org Type Scope
	 *
	 * @var string
	 */
	protected static $scope = 'https://schema.org/Rating';

	/**
	 * The highest value allowed in this rating system. If bestRating is omitted, 5 is assumed.
	 * Expected Type: Number, Text
	 * 
	 * @var	array
	 */
	protected static $bestRating = array('value' => 'bestRating',
		'expectedTypes' => array('Number', 'Text')
	);

	/**
	 * The rating for the content.
	 * Expected Type: Text
	 * 
	 * @var	array
	 */
	protected static $ratingValue = array('value' => 'ratingValue',
		'expectedTypes' => array('Text')
	);

	/**
	 * The lowest value allowed in this rating system. If worstRating is omitted, 1 is assumed.
	 * Expected Type: Number, Text
	 * 
	 * @var	array
	 */
	protected static $worstRating = array('value' => 'worstRating',
		'expectedTypes' => array('Number', 'Text')
	);

	/**
	 * Return the 'bestRating' Property value
	 *
	 * @return	string
	 */
	public static function pBestRating()
	{
		return self::getValue(self::$bestRating);
	}

	/**
	 * Return the 'ratingValue' Property value
	 *
	 * @return	string
	 */
	public static function pRatingValue()
	{
		return self::getValue(self::$ratingValue);
	}

	/**
	 * Return the 'worstRating' Property value
	 *
	 * @return	string
	 */
	public static function pWorstRating()
	{
		return self::getValue(self::$worstRating);
	}
}
