<?php
/**
 * A permit issued by an organization, e.g. a parking pass.
 *
 * @see    http://schema.org/Permit
*/
abstract class TypePermit extends TypeIntangible
{
	/**
	 * The Schema.org Type Scope
	 *
	 * @var string
	 */
	protected static $scope = 'https://schema.org/Permit';

	/**
	 * The organization issuing the permit.
	 * Expected Type: Organization
	 * 
	 * @var	array
	 */
	protected static $issuedBy = array('value' => 'issuedBy',
		'expectedTypes' => array('Organization')
	);

	/**
	 * The service through with the permit was granted.
	 * Expected Type: Service
	 * 
	 * @var	array
	 */
	protected static $issuedThrough = array('value' => 'issuedThrough',
		'expectedTypes' => array('Service')
	);

	/**
	 * The target audience for this permit.
	 * Expected Type: Audience
	 * 
	 * @var	array
	 */
	protected static $permitAudience = array('value' => 'permitAudience',
		'expectedTypes' => array('Audience')
	);

	/**
	 * The time validity of the permit.
	 * Expected Type: Duration
	 * 
	 * @var	array
	 */
	protected static $validFor = array('value' => 'validFor',
		'expectedTypes' => array('Duration')
	);

	/**
	 * The date when the item becomes valid.
	 * Expected Type: DateTime
	 * 
	 * @var	array
	 */
	protected static $validFrom = array('value' => 'validFrom',
		'expectedTypes' => array('DateTime')
	);

	/**
	 * The geographic area where the permit is valid.
	 * Expected Type: AdministrativeArea
	 * 
	 * @var	array
	 */
	protected static $validIn = array('value' => 'validIn',
		'expectedTypes' => array('AdministrativeArea')
	);

	/**
	 * The date when the item is no longer valid.
	 * Expected Type: Date
	 * 
	 * @var	array
	 */
	protected static $validUntil = array('value' => 'validUntil',
		'expectedTypes' => array('Date')
	);

	/**
	 * Return the 'issuedBy' Property value
	 *
	 * @return	string
	 */
	public static function pIssuedBy()
	{
		return self::getValue(self::$issuedBy);
	}

	/**
	 * Return the 'issuedThrough' Property value
	 *
	 * @return	string
	 */
	public static function pIssuedThrough()
	{
		return self::getValue(self::$issuedThrough);
	}

	/**
	 * Return the 'permitAudience' Property value
	 *
	 * @return	string
	 */
	public static function pPermitAudience()
	{
		return self::getValue(self::$permitAudience);
	}

	/**
	 * Return the 'validFor' Property value
	 *
	 * @return	string
	 */
	public static function pValidFor()
	{
		return self::getValue(self::$validFor);
	}

	/**
	 * Return the 'validFrom' Property value
	 *
	 * @return	string
	 */
	public static function pValidFrom()
	{
		return self::getValue(self::$validFrom);
	}

	/**
	 * Return the 'validIn' Property value
	 *
	 * @return	string
	 */
	public static function pValidIn()
	{
		return self::getValue(self::$validIn);
	}

	/**
	 * Return the 'validUntil' Property value
	 *
	 * @return	string
	 */
	public static function pValidUntil()
	{
		return self::getValue(self::$validUntil);
	}
}
