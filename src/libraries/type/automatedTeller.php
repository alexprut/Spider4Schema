<?php
/**
 * ATM/cash machine.
 *
 * @see    http://schema.org/AutomatedTeller
*/
abstract class TypeAutomatedTeller extends TypeFinancialService
{
	/**
	 * The Schema.org Type Scope
	 *
	 * @var string
	 */
	protected static $scope = 'https://schema.org/AutomatedTeller';
}
