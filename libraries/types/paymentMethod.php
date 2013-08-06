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
 * A payment method is a standardized procedure for transferring the monetary amount for a purchase. Payment methods are characterized by the legal and technical structures used, and by the organization or group carrying out the transaction.

Commonly used values:

http://purl.org/goodrelations/v1#ByBankTransferInAdvance
http://purl.org/goodrelations/v1#ByInvoice
http://purl.org/goodrelations/v1#Cash
http://purl.org/goodrelations/v1#CheckInAdvance
http://purl.org/goodrelations/v1#COD
http://purl.org/goodrelations/v1#DirectDebit
http://purl.org/goodrelations/v1#GoogleCheckout
http://purl.org/goodrelations/v1#PayPal
http://purl.org/goodrelations/v1#PaySwarm
		
 *
 * @package     Joomla.Platform
 * @subpackage  Microdata
 *
 * @see         http://schema.org/PaymentMethod
 * @since       13.1
*/
abstract class TypePaymentMethod extends TypeEnumeration
{
	/**
	 * The Schema.org Type Scope
	 *
	 * @var string
	 */
	protected static $scope = 'https://schema.org/PaymentMethod';
}
