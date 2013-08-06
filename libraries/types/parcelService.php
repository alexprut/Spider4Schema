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
 * A private parcel service as the delivery mode available for a certain offer.

Commonly used values:

http://purl.org/goodrelations/v1#DHL
http://purl.org/goodrelations/v1#FederalExpress
http://purl.org/goodrelations/v1#UPS
	
 *
 * @package     Joomla.Platform
 * @subpackage  Microdata
 *
 * @see         http://schema.org/ParcelService
 * @since       13.1
*/
abstract class TypeParcelService extends TypeDeliveryMethod
{
	/**
	 * The Schema.org Type Scope
	 *
	 * @var string
	 */
	protected static $scope = 'https://schema.org/ParcelService';
}
