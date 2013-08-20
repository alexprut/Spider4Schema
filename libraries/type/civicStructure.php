<?php
/**
 * A public structure, such as a town hall or concert hall.
 *
 * @see    http://schema.org/CivicStructure
 * @since  1.0
*/
abstract class TypeCivicStructure extends TypePlace
{
	/**
	 * The Schema.org Type Scope
	 *
	 * @var string
	 */
	protected static $scope = 'https://schema.org/CivicStructure';

	/**
	 * The opening hours for a business. Opening hours can be specified as a weekly time range, starting with days, then times per day. Multiple days can be listed with commas ',' separating each day. Day or time ranges are specified using a hyphen '-'.- Days are specified using the following two-letter combinations: Mo, Tu, We, Th, Fr, Sa, Su.- Times are specified using 24:00 time. For example, 3pm is specified as 15:00. - Here is an example: <time itemprop="openingHours" datetime="Tu,Th 16:00-20:00">Tuesdays and Thursdays 4-8pm</time>. - If a business is open 7 days a week, then it can be specified as <time itemprop="openingHours" datetime="Mo-Su">Monday through Sunday, all day</time>.
	 * Expected Type: Duration
	 * 
	 * @var	array
	 */
	protected static $openingHours = array('value' => 'openingHours',
		'expectedTypes' => array('Duration')
	);

	/**
	 * Return the 'openingHours' Property value
	 *
	 * @return	string
	 */
	public static function pOpeningHours()
	{
		return self::getValue(self::$openingHours);
	}
}
