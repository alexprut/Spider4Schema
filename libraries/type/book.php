<?php
/**
 * A book.
 *
 * @see    http://schema.org/Book
 * @since  1.0
*/
abstract class TypeBook extends TypeCreativeWork
{
	/**
	 * The Schema.org Type Scope
	 *
	 * @var string
	 */
	protected static $scope = 'https://schema.org/Book';

	/**
	 * The edition of the book.
	 * Expected Type: Text
	 * 
	 * @var	array
	 */
	protected static $bookEdition = array('value' => 'bookEdition',
		'expectedTypes' => array('Text')
	);

	/**
	 * The format of the book.
	 * Expected Type: BookFormatType
	 * 
	 * @var	array
	 */
	protected static $bookFormat = array('value' => 'bookFormat',
		'expectedTypes' => array('BookFormatType')
	);

	/**
	 * The illustrator of the book.
	 * Expected Type: Person
	 * 
	 * @var	array
	 */
	protected static $illustrator = array('value' => 'illustrator',
		'expectedTypes' => array('Person')
	);

	/**
	 * The ISBN of the book.
	 * Expected Type: Text
	 * 
	 * @var	array
	 */
	protected static $isbn = array('value' => 'isbn',
		'expectedTypes' => array('Text')
	);

	/**
	 * The number of pages in the book.
	 * Expected Type: Integer
	 * 
	 * @var	array
	 */
	protected static $numberOfPages = array('value' => 'numberOfPages',
		'expectedTypes' => array('Integer')
	);

	/**
	 * Return the 'bookEdition' Property value
	 *
	 * @return	string
	 */
	public static function pBookEdition()
	{
		return self::getValue(self::$bookEdition);
	}

	/**
	 * Return the 'bookFormat' Property value
	 *
	 * @return	string
	 */
	public static function pBookFormat()
	{
		return self::getValue(self::$bookFormat);
	}

	/**
	 * Return the 'illustrator' Property value
	 *
	 * @return	string
	 */
	public static function pIllustrator()
	{
		return self::getValue(self::$illustrator);
	}

	/**
	 * Return the 'isbn' Property value
	 *
	 * @return	string
	 */
	public static function pIsbn()
	{
		return self::getValue(self::$isbn);
	}

	/**
	 * Return the 'numberOfPages' Property value
	 *
	 * @return	string
	 */
	public static function pNumberOfPages()
	{
		return self::getValue(self::$numberOfPages);
	}
}
