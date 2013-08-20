<?php
/**
 * The act of deliberately creating/producing/generating/building a result out of the agent.
 *
 * @see    http://schema.org/CreateAction
 * @since  1.0
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
