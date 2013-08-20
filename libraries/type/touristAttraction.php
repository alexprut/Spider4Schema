<?php
/**
 * A tourist attraction.
 *
 * @see    http://schema.org/TouristAttraction
 * @since  1.0
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
