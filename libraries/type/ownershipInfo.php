<?php
/**
 * A structured value providing information about when a certain organization or person owned a certain product.
 *
 * @see    http://schema.org/OwnershipInfo
*/
abstract class TypeOwnershipInfo extends TypeStructuredValue
{
	/**
	 * The Schema.org Type Scope
	 *
	 * @var string
	 */
	protected static $scope = 'https://schema.org/OwnershipInfo';

	/**
	 * The organization or person from which the product was acquired.
	 * Expected Type: Organization, Person
	 * 
	 * @var	array
	 */
	protected static $acquiredFrom = array('value' => 'acquiredFrom',
		'expectedTypes' => array('Organization', 'Person')
	);

	/**
	 * The date and time of obtaining the product.
	 * Expected Type: DateTime
	 * 
	 * @var	array
	 */
	protected static $ownedFrom = array('value' => 'ownedFrom',
		'expectedTypes' => array('DateTime')
	);

	/**
	 * The date and time of giving up ownership on the product.
	 * Expected Type: DateTime
	 * 
	 * @var	array
	 */
	protected static $ownedThrough = array('value' => 'ownedThrough',
		'expectedTypes' => array('DateTime')
	);

	/**
	 * The product that this structured value is referring to.
	 * Expected Type: Product
	 * 
	 * @var	array
	 */
	protected static $typeOfGood = array('value' => 'typeOfGood',
		'expectedTypes' => array('Product')
	);

	/**
	 * Return the 'acquiredFrom' Property value
	 *
	 * @return	string
	 */
	public static function pAcquiredFrom()
	{
		return self::getValue(self::$acquiredFrom);
	}

	/**
	 * Return the 'ownedFrom' Property value
	 *
	 * @return	string
	 */
	public static function pOwnedFrom()
	{
		return self::getValue(self::$ownedFrom);
	}

	/**
	 * Return the 'ownedThrough' Property value
	 *
	 * @return	string
	 */
	public static function pOwnedThrough()
	{
		return self::getValue(self::$ownedThrough);
	}

	/**
	 * Return the 'typeOfGood' Property value
	 *
	 * @return	string
	 */
	public static function pTypeOfGood()
	{
		return self::getValue(self::$typeOfGood);
	}
}
