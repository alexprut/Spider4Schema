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
 * A body of structured information describing some topic(s) of interest.
 *
 * @package     Joomla.Platform
 * @subpackage  Microdata
 *
 * @see         http://schema.org/Dataset
 * @since       13.1
*/
abstract class TypeDataset extends TypeCreativeWork
{
	/**
	 * The Schema.org Type Scope
	 *
	 * @var string
	 */
	protected static $scope = 'https://schema.org/Dataset';

	/**
	 * A data catalog which contains a dataset.
	 * Expected Type: DataCatalog
	 * 
	 * @var	array
	 */
	protected static $catalog = array('value' => 'catalog',
		'expectedTypes' => array('DataCatalog')
	);

	/**
	 * A downloadable form of this dataset, at a specific location, in a specific format.
	 * Expected Type: DataDownload
	 * 
	 * @var	array
	 */
	protected static $distribution = array('value' => 'distribution',
		'expectedTypes' => array('DataDownload')
	);

	/**
	 * The range of spatial applicability of a dataset, e.g. for a dataset of New York weather, the state of New York.
	 * Expected Type: Place
	 * 
	 * @var	array
	 */
	protected static $spatial = array('value' => 'spatial',
		'expectedTypes' => array('Place')
	);

	/**
	 * The range of temporal applicability of a dataset, e.g. for a 2011 census dataset, the year 2011 (in ISO 8601 time interval format).
	 * Expected Type: DateTime
	 * 
	 * @var	array
	 */
	protected static $temporal = array('value' => 'temporal',
		'expectedTypes' => array('DateTime')
	);

	/**
	 * Return the 'catalog' Property value
	 *
	 * @return	string
	 */
	public static function pCatalog()
	{
		return self::getValue(self::$catalog);
	}

	/**
	 * Return the 'distribution' Property value
	 *
	 * @return	string
	 */
	public static function pDistribution()
	{
		return self::getValue(self::$distribution);
	}

	/**
	 * Return the 'spatial' Property value
	 *
	 * @return	string
	 */
	public static function pSpatial()
	{
		return self::getValue(self::$spatial);
	}

	/**
	 * Return the 'temporal' Property value
	 *
	 * @return	string
	 */
	public static function pTemporal()
	{
		return self::getValue(self::$temporal);
	}
}
