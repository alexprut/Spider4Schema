<?php
/**
 * A shop that will buy, or lend money against the security of, personal possessions.
 *
 * @see    http://schema.org/PawnShop
*/
abstract class TypePawnShop extends TypeStore
{
	/**
	 * The Schema.org Type Scope
	 *
	 * @var string
	 */
	protected static $scope = 'https://schema.org/PawnShop';
}
