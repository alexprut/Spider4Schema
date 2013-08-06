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
 * A business entity type is a conceptual entity representing the legal form, the size, the main line of business, the position in the value chain, or any combination thereof, of an organization or business person.

Commonly used values:

http://purl.org/goodrelations/v1#Business
http://purl.org/goodrelations/v1#Enduser
http://purl.org/goodrelations/v1#PublicInstitution
http://purl.org/goodrelations/v1#Reseller

		
 *
 * @package     Joomla.Platform
 * @subpackage  Microdata
 *
 * @see         http://schema.org/BusinessEntityType
 * @since       13.1
*/
abstract class TypeBusinessEntityType extends TypeEnumeration
{
	/**
	 * The Schema.org Type Scope
	 *
	 * @var string
	 */
	protected static $scope = 'https://schema.org/BusinessEntityType';
}
