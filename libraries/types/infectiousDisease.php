<?php
/**
 * @package     Joomla.Platform
 * @subpackage  Microdata
 *
 * @copyright   Copyright (C) 2005 - 2013 Open Source Matters, Inc. All rights reserved.
 * @license     GNU General Public License version 2 or later; see LICENSE
 */

defined("JPATH_PLATFORM") or die;

/**
 * An infectious disease is a clinically evident human disease resulting from the presence of pathogenic microbial agents, like pathogenic viruses, pathogenic bacteria, fungi, protozoa, multicellular parasites, and prions. To be considered an infectious disease, such pathogens are known to be able to cause this disease.
 *
 * @package     Joomla.Platform
 * @subpackage  Microdata
 *
 * @see         http://schema.org/InfectiousDisease
 * @since       13.1
*/
abstract class TypeInfectiousDisease extends TypeMedicalCondition
{
	/**
	 * The Schema.org Type Scope
	 *
	 * @var string
	 */
	protected static $scope = 'https://schema.org/InfectiousDisease';

	/**
	 * The actual infectious agent, such as a specific bacterium.
	 * Expected Type: Text
	 * 
	 * @var	array
	 */
	protected static $infectiousAgent = array('value' => 'infectiousAgent',
		'expectedTypes' => array('Text')
	);

	/**
	 * The class of infectious agent (bacteria, prion, etc.) that causes the disease.
	 * Expected Type: InfectiousAgentClass
	 * 
	 * @var	array
	 */
	protected static $infectiousAgentClass = array('value' => 'infectiousAgentClass',
		'expectedTypes' => array('InfectiousAgentClass')
	);

	/**
	 * How the disease spreads, either as a route or vector, for example 'direct contact', 'Aedes aegypti', etc.
	 * Expected Type: Text
	 * 
	 * @var	array
	 */
	protected static $transmissionMethod = array('value' => 'transmissionMethod',
		'expectedTypes' => array('Text')
	);

	/**
	 * Return the 'infectiousAgent' Property value
	 *
	 * @return	string
	 */
	public static function pInfectiousAgent()
	{
		return self::getValue(self::$infectiousAgent);
	}

	/**
	 * Return the 'infectiousAgentClass' Property value
	 *
	 * @return	string
	 */
	public static function pInfectiousAgentClass()
	{
		return self::getValue(self::$infectiousAgentClass);
	}

	/**
	 * Return the 'transmissionMethod' Property value
	 *
	 * @return	string
	 */
	public static function pTransmissionMethod()
	{
		return self::getValue(self::$transmissionMethod);
	}
}
