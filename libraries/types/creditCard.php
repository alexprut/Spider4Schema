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
 * A credit or debit card type as a standardized procedure for transferring the monetary amount for a purchase.

Commonly used values:

http://purl.org/goodrelations/v1#AmericanExpress
http://purl.org/goodrelations/v1#DinersClub
http://purl.org/goodrelations/v1#Discover
http://purl.org/goodrelations/v1#JCB
http://purl.org/goodrelations/v1#MasterCard
http://purl.org/goodrelations/v1#VISA
		
 *
 * @package     Joomla.Platform
 * @subpackage  Microdata
 *
 * @see         http://schema.org/CreditCard
 * @since       13.1
*/
abstract class TypeCreditCard extends TypePaymentMethod
{
	/**
	 * The Schema.org Type Scope
	 *
	 * @var string
	 */
	protected static $scope = 'https://schema.org/CreditCard';
}
