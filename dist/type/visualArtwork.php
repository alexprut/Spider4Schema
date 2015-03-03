<?php
/**
 * A work of art that is primarily visual in character.
 *
 * @see    http://schema.org/VisualArtwork
*/
abstract class TypeVisualArtwork extends TypeCreativeWork
{
	/**
	 * The Schema.org Type Scope
	 *
	 * @var string
	 */
	protected static $scope = 'https://schema.org/VisualArtwork';

	/**
	 * The number of copies when multiple copies of a piece of artwork are produced - e.g. for a limited edition of 20 prints, 'artEdition' refers to the total number of copies (in this example "20").
	 * Expected Type: Text, Integer
	 * 
	 * @var	array
	 */
	protected static $artEdition = array('value' => 'artEdition',
		'expectedTypes' => array('Text', 'Integer')
	);

	/**
	 * e.g. Painting, Drawing, Sculpture, Print, Photograph, Assemblage, Collage, etc.
	 * Expected Type: Text, URL
	 * 
	 * @var	array
	 */
	protected static $artform = array('value' => 'artform',
		'expectedTypes' => array('Text', 'URL')
	);

	/**
	 * The depth of the item.
	 * Expected Type: Distance, QuantitativeValue
	 * 
	 * @var	array
	 */
	protected static $depth = array('value' => 'depth',
		'expectedTypes' => array('Distance', 'QuantitativeValue')
	);

	/**
	 * The height of the item.
	 * Expected Type: Distance, QuantitativeValue
	 * 
	 * @var	array
	 */
	protected static $height = array('value' => 'height',
		'expectedTypes' => array('Distance', 'QuantitativeValue')
	);

	/**
	 * e.g. Oil, Watercolour, Acrylic, Linoprint, Marble, Cyanotype, Digital, Lithograph, DryPoint, Intaglio, Pastel, Woodcut, Pencil, Mixed Media, etc.
	 * Expected Type: Text, URL
	 * 
	 * @var	array
	 */
	protected static $material = array('value' => 'material',
		'expectedTypes' => array('Text', 'URL')
	);

	/**
	 * e.g. Canvas, Paper, Wood, Board, etc.
	 * Expected Type: Text, URL
	 * 
	 * @var	array
	 */
	protected static $surface = array('value' => 'surface',
		'expectedTypes' => array('Text', 'URL')
	);

	/**
	 * The width of the item.
	 * Expected Type: Distance, QuantitativeValue
	 * 
	 * @var	array
	 */
	protected static $width = array('value' => 'width',
		'expectedTypes' => array('Distance', 'QuantitativeValue')
	);

	/**
	 * Return the 'artEdition' Property value
	 *
	 * @return	string
	 */
	public static function pArtEdition()
	{
		return self::getValue(self::$artEdition);
	}

	/**
	 * Return the 'artform' Property value
	 *
	 * @return	string
	 */
	public static function pArtform()
	{
		return self::getValue(self::$artform);
	}

	/**
	 * Return the 'depth' Property value
	 *
	 * @return	string
	 */
	public static function pDepth()
	{
		return self::getValue(self::$depth);
	}

	/**
	 * Return the 'height' Property value
	 *
	 * @return	string
	 */
	public static function pHeight()
	{
		return self::getValue(self::$height);
	}

	/**
	 * Return the 'material' Property value
	 *
	 * @return	string
	 */
	public static function pMaterial()
	{
		return self::getValue(self::$material);
	}

	/**
	 * Return the 'surface' Property value
	 *
	 * @return	string
	 */
	public static function pSurface()
	{
		return self::getValue(self::$surface);
	}

	/**
	 * Return the 'width' Property value
	 *
	 * @return	string
	 */
	public static function pWidth()
	{
		return self::getValue(self::$width);
	}
}
