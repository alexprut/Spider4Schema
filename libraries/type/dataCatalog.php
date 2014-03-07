<?php
/**
 * A collection of datasets.
 *
 * @see    http://schema.org/DataCatalog
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
