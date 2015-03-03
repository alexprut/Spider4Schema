<?php
/**
 * A rating is an evaluation on a numeric scale, such as 1 to 5 stars.
 *
 * @see    http://schema.org/Rating
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
	 * Expected Type: Text, Number
	 * 
	 * @var	array
	 */
	protected static $bestRating = array('value' => 'bestRating',
		'expectedTypes' => array('Text', 'Number')
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
	 * Expected Type: Text, Number
	 * 
	 * @var	array
	 */
	protected static $worstRating = array('value' => 'worstRating',
		'expectedTypes' => array('Text', 'Number')
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
