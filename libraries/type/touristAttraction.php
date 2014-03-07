<?php
/**
 * A tourist attraction.
 *
 * @see    http://schema.org/TouristAttraction
*/
abstract class TypeTouristAttraction extends TypePlace
{
	/**
	 * The Schema.org Type Scope
	 *
	 * @var string
	 */
	protected static $scope = 'https://schema.org/TouristAttraction';
}
