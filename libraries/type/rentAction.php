<?php
/**
 * The act of giving money in return for temporary use, but not ownership, of an object such as a vehicle or property. For example, an agent rents a property from a landlord in exchange for a periodic payment.
 *
 * @see    http://schema.org/RentAction
 * @since  1.0
*/
abstract class TypeRentAction extends TypeTradeAction
{
	/**
	 * The Schema.org Type Scope
	 *
	 * @var string
	 */
	protected static $scope = 'https://schema.org/RentAction';

	/**
	 * A sub property of participant. The owner of the real estate property. Sub property of destination or participant?
	 * Expected Type: Organization, Person
	 * 
	 * @var	array
	 */
	protected static $landlord = array('value' => 'landlord',
		'expectedTypes' => array('Organization', 'Person')
	);

	/**
	 * A sub property of participant. The real estate agent involved in the action.
	 * Expected Type: RealEstateAgent
	 * 
	 * @var	array
	 */
	protected static $realEstateAgent = array('value' => 'realEstateAgent',
		'expectedTypes' => array('RealEstateAgent')
	);

	/**
	 * Return the 'landlord' Property value
	 *
	 * @return	string
	 */
	public static function pLandlord()
	{
		return self::getValue(self::$landlord);
	}

	/**
	 * Return the 'realEstateAgent' Property value
	 *
	 * @return	string
	 */
	public static function pRealEstateAgent()
	{
		return self::getValue(self::$realEstateAgent);
	}
}
