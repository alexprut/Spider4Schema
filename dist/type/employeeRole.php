<?php
/**
 * A subclass of OrganizationRole used to describe employee relationships.
 *
 * @see    http://schema.org/EmployeeRole
*/
abstract class TypeEmployeeRole extends TypeOrganizationRole
{
	/**
	 * The Schema.org Type Scope
	 *
	 * @var string
	 */
	protected static $scope = 'https://schema.org/EmployeeRole';

	/**
	 * The base salary of the job or of an employee in an EmployeeRole.
	 * Expected Type: PriceSpecification, Number
	 * 
	 * @var	array
	 */
	protected static $baseSalary = array('value' => 'baseSalary',
		'expectedTypes' => array('PriceSpecification', 'Number')
	);

	/**
	 * The currency (coded using ISO 4217, http://en.wikipedia.org/wiki/ISO_4217 ) used for the main salary information in this job posting or for this employee.
	 * Expected Type: Text
	 * 
	 * @var	array
	 */
	protected static $salaryCurrency = array('value' => 'salaryCurrency',
		'expectedTypes' => array('Text')
	);

	/**
	 * Return the 'baseSalary' Property value
	 *
	 * @return	string
	 */
	public static function pBaseSalary()
	{
		return self::getValue(self::$baseSalary);
	}

	/**
	 * Return the 'salaryCurrency' Property value
	 *
	 * @return	string
	 */
	public static function pSalaryCurrency()
	{
		return self::getValue(self::$salaryCurrency);
	}
}
