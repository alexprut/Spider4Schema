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
 * Organization: A business corporation.
 *
 * @package     Joomla.Platform
 * @subpackage  Microdata
 *
 * @see         http://schema.org/Corporation
 * @since       13.1
*/
abstract class TypeCorporation extends TypeOrganization
{
	/**
	 * The Schema.org Type Scope
	 *
	 * @var string
	 */
	protected static $scope = 'https://schema.org/Corporation';

	/**
	 * The exchange traded instrument associated with a Corporation object. The tickerSymbol is expressed as an exchange and an instrument name separated by a space character. For the exchange component of the tickerSymbol attribute, we reccommend using the controlled vocaulary of Market Identifier Codes (MIC) specified in ISO15022.
	 * Expected Type: Text
	 * 
	 * @var	array
	 */
	protected static $tickerSymbol = array('value' => 'tickerSymbol',
		'expectedTypes' => array('Text')
	);

	/**
	 * Return the 'tickerSymbol' Property value
	 *
	 * @return	string
	 */
	public static function pTickerSymbol()
	{
		return self::getValue(self::$tickerSymbol);
	}
}
