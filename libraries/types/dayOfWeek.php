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
 * The day of the week, e.g. used to specify to which day the opening hours of an OpeningHoursSpecification refer.

Commonly used values:

http://purl.org/goodrelations/v1#Monday
http://purl.org/goodrelations/v1#Tuesday
http://purl.org/goodrelations/v1#Wednesday
http://purl.org/goodrelations/v1#Thursday
http://purl.org/goodrelations/v1#Friday
http://purl.org/goodrelations/v1#Saturday
http://purl.org/goodrelations/v1#Sunday
http://purl.org/goodrelations/v1#PublicHolidays
		
 *
 * @package     Joomla.Platform
 * @subpackage  Microdata
 *
 * @see         http://schema.org/DayOfWeek
 * @since       13.1
*/
abstract class TypeDayOfWeek extends TypeEnumeration
{
	/**
	 * The Schema.org Type Scope
	 *
	 * @var string
	 */
	protected static $scope = 'https://schema.org/DayOfWeek';
}
