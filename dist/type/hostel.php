<?php
/**
 * A hostel - cheap accommodation, often in shared dormitories.
 *
 * @see    http://schema.org/Hostel
*/
abstract class TypeHostel extends TypeLodgingBusiness
{
	/**
	 * The Schema.org Type Scope
	 *
	 * @var string
	 */
	protected static $scope = 'https://schema.org/Hostel';
}
