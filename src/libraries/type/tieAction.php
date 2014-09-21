<?php
/**
 * The act of reaching a draw in a competitive activity.
 *
 * @see    http://schema.org/TieAction
*/
abstract class TypeTieAction extends TypeAchieveAction
{
	/**
	 * The Schema.org Type Scope
	 *
	 * @var string
	 */
	protected static $scope = 'https://schema.org/TieAction';
}
