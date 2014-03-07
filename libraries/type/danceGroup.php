<?php
/**
 * A dance group—for example, the Alvin Ailey Dance Theater or Riverdance.
 *
 * @see    http://schema.org/DanceGroup
*/
abstract class TypeDanceGroup extends TypePerformingGroup
{
	/**
	 * The Schema.org Type Scope
	 *
	 * @var string
	 */
	protected static $scope = 'https://schema.org/DanceGroup';
}
