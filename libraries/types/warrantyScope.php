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
 * A range of of services that will be provided to a customer free of charge in case of a defect or malfunction of a product.

Commonly used values:

http://purl.org/goodrelations/v1#Labor-BringIn
http://purl.org/goodrelations/v1#PartsAndLabor-BringIn
http://purl.org/goodrelations/v1#PartsAndLabor-PickUp
	
 *
 * @package     Joomla.Platform
 * @subpackage  Microdata
 *
 * @see         http://schema.org/WarrantyScope
 * @since       13.1
*/
abstract class TypeWarrantyScope extends TypeEnumeration
{
	/**
	 * The Schema.org Type Scope
	 *
	 * @var string
	 */
	protected static $scope = 'https://schema.org/WarrantyScope';
}
