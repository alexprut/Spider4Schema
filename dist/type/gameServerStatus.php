<?php
/**
 * Status of a game server.
 *
 * @see    http://schema.org/GameServerStatus
*/
abstract class TypeGameServerStatus extends TypeEnumeration
{
	/**
	 * The Schema.org Type Scope
	 *
	 * @var string
	 */
	protected static $scope = 'https://schema.org/GameServerStatus';
}
