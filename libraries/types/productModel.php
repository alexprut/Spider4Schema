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
 * A datasheet or vendor specification of a product (in the sense of a prototypical description).
 *
 * @package     Joomla.Platform
 * @subpackage  Microdata
 *
 * @see         http://schema.org/ProductModel
 * @since       13.1
*/
abstract class TypeProductModel extends TypeProduct
{
	/**
	 * The Schema.org Type Scope
	 *
	 * @var string
	 */
	protected static $scope = 'https://schema.org/ProductModel';

	/**
	 * A pointer to a base product from which this product is a variant. It is safe to infer that the variant inherits all product features from the base model, unless defined locally. This is not transitive.
	 * Expected Type: ProductModel
	 * 
	 * @var	array
	 */
	protected static $isVariantOf = array('value' => 'isVariantOf',
		'expectedTypes' => array('ProductModel')
	);

	/**
	 * A pointer from a previous, often discontinued variant of the product to its newer variant.
	 * Expected Type: ProductModel
	 * 
	 * @var	array
	 */
	protected static $predecessorOf = array('value' => 'predecessorOf',
		'expectedTypes' => array('ProductModel')
	);

	/**
	 * A pointer from a newer variant of a product  to its previous, often discontinued predecessor.
	 * Expected Type: ProductModel
	 * 
	 * @var	array
	 */
	protected static $successorOf = array('value' => 'successorOf',
		'expectedTypes' => array('ProductModel')
	);

	/**
	 * Return the 'isVariantOf' Property value
	 *
	 * @return	string
	 */
	public static function pIsVariantOf()
	{
		return self::getValue(self::$isVariantOf);
	}

	/**
	 * Return the 'predecessorOf' Property value
	 *
	 * @return	string
	 */
	public static function pPredecessorOf()
	{
		return self::getValue(self::$predecessorOf);
	}

	/**
	 * Return the 'successorOf' Property value
	 *
	 * @return	string
	 */
	public static function pSuccessorOf()
	{
		return self::getValue(self::$successorOf);
	}
}
