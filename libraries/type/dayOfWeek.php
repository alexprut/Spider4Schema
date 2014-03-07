<?php
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
 * @see    http://schema.org/DayOfWeek
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
