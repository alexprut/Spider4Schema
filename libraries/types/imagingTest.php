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
 * Any medical imaging modality typically used for diagnostic purposes.
 *
 * @package     Joomla.Platform
 * @subpackage  Microdata
 *
 * @see         http://schema.org/ImagingTest
 * @since       13.1
*/
abstract class TypeImagingTest extends TypeMedicalTest
{
	/**
	 * The Schema.org Type Scope
	 *
	 * @var string
	 */
	protected static $scope = 'https://schema.org/ImagingTest';

	/**
	 * Imaging technique used.
	 * Expected Type: MedicalImagingTechnique
	 * 
	 * @var	array
	 */
	protected static $imagingTechnique = array('value' => 'imagingTechnique',
		'expectedTypes' => array('MedicalImagingTechnique')
	);

	/**
	 * Return the 'imagingTechnique' Property value
	 *
	 * @return	string
	 */
	public static function pImagingTechnique()
	{
		return self::getValue(self::$imagingTechnique);
	}
}
