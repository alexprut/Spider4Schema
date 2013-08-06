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
 * A collection of datasets.
 *
 * @package     Joomla.Platform
 * @subpackage  Microdata
 *
 * @see         http://schema.org/DataCatalog
 * @since       13.1
*/
abstract class TypeDataCatalog extends TypeCreativeWork
{
	/**
	 * The Schema.org Type Scope
	 *
	 * @var string
	 */
	protected static $scope = 'https://schema.org/DataCatalog';

	/**
	 * A dataset contained in a catalog.
	 * Expected Type: Dataset
	 * 
	 * @var	array
	 */
	protected static $dataset = array('value' => 'dataset',
		'expectedTypes' => array('Dataset')
	);

	/**
	 * Return the 'dataset' Property value
	 *
	 * @return	string
	 */
	public static function pDataset()
	{
		return self::getValue(self::$dataset);
	}
}
