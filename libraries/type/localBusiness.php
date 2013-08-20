<?php
/**
 * A particular physical business or branch of an organization. Examples of LocalBusiness include a restaurant, a particular branch of a restaurant chain, a branch of a bank, a medical practice, a club, a bowling alley, etc.
 *
 * @see    http://schema.org/LocalBusiness
 * @since  1.0
*/
abstract class TypeLocalBusiness extends TypeOrganization
{
	/**
	 * The Schema.org Type Scope
	 *
	 * @var string
	 */
	protected static $scope = 'https://schema.org/LocalBusiness';

	/**
	 * The larger organization that this local business is a branch of, if any.
	 * Expected Type: Organization
	 * 
	 * @var	array
	 */
	protected static $branchOf = array('value' => 'branchOf',
		'expectedTypes' => array('Organization')
	);

	/**
	 * The currency accepted (in ISO 4217 currency format).
	 * Expected Type: Text
	 * 
	 * @var	array
	 */
	protected static $currenciesAccepted = array('value' => 'currenciesAccepted',
		'expectedTypes' => array('Text')
	);

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
	 * Cash, credit card, etc.
	 * Expected Type: Text
	 * 
	 * @var	array
	 */
	protected static $paymentAccepted = array('value' => 'paymentAccepted',
		'expectedTypes' => array('Text')
	);

	/**
	 * The price range of the business, for example $$$.
	 * Expected Type: Text
	 * 
	 * @var	array
	 */
	protected static $priceRange = array('value' => 'priceRange',
		'expectedTypes' => array('Text')
	);

	/**
	 * Return the 'branchOf' Property value
	 *
	 * @return	string
	 */
	public static function pBranchOf()
	{
		return self::getValue(self::$branchOf);
	}

	/**
	 * Return the 'currenciesAccepted' Property value
	 *
	 * @return	string
	 */
	public static function pCurrenciesAccepted()
	{
		return self::getValue(self::$currenciesAccepted);
	}

	/**
	 * Return the 'openingHours' Property value
	 *
	 * @return	string
	 */
	public static function pOpeningHours()
	{
		return self::getValue(self::$openingHours);
	}

	/**
	 * Return the 'paymentAccepted' Property value
	 *
	 * @return	string
	 */
	public static function pPaymentAccepted()
	{
		return self::getValue(self::$paymentAccepted);
	}

	/**
	 * Return the 'priceRange' Property value
	 *
	 * @return	string
	 */
	public static function pPriceRange()
	{
		return self::getValue(self::$priceRange);
	}
}
