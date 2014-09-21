<?php
/**
 * A reservation for train travel.
 *
 * @see    http://schema.org/TrainReservation
*/
abstract class TypeTrainReservation extends TypeReservation
{
	/**
	 * The Schema.org Type Scope
	 *
	 * @var string
	 */
	protected static $scope = 'https://schema.org/TrainReservation';
}
