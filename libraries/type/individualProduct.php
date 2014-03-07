<?php
/**
 * A single, identifiable product instance (e.g. a laptop with a particular serial number).
 *
 * @see    http://schema.org/IndividualProduct
*/
abstract class TypeIndividualProduct extends TypeProduct
{
	/**
	 * The Schema.org Type Scope
	 *
	 * @var string
	 */
	protected static $scope = 'https://schema.org/IndividualProduct';

	/**
	 * The serial number or any alphanumeric identifier of a particular product. When attached to an offer, it is a shortcut for the serial number of the product included in the offer.
	 * Expected Type: Text
	 * 
	 * @var	array
	 */
	protected static $serialNumber = array('value' => 'serialNumber',
		'expectedTypes' => array('Text')
	);

	/**
	 * Return the 'serialNumber' Property value
	 *
	 * @return	string
	 */
	public static function pSerialNumber()
	{
		return self::getValue(self::$serialNumber);
	}
}
