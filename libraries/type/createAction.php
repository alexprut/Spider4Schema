<?php
/**
 * The act of deliberately creating/producing/generating/building a result out of the agent.
 *
 * @see    http://schema.org/CreateAction
*/
abstract class TypeCreateAction extends TypeAction
{
	/**
	 * The Schema.org Type Scope
	 *
	 * @var string
	 */
	protected static $scope = 'https://schema.org/CreateAction';
}
