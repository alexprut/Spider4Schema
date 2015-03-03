<?php
/**
 * A publication in any medium issued in successive parts bearing numerical or chronological designations and intended, such as a magazine, scholarly journal, or newspaper to continue indefinitely. See also blog post.
 *
 * @see    http://schema.org/Periodical
*/
abstract class TypePeriodical extends TypeSeries
{
	/**
	 * The Schema.org Type Scope
	 *
	 * @var string
	 */
	protected static $scope = 'https://schema.org/Periodical';

	/**
	 * The International Standard Serial Number (ISSN) that identifies this periodical. You can repeat this property to (for example) identify different formats of this periodical.
	 * Expected Type: Text
	 * 
	 * @var	array
	 */
	protected static $issn = array('value' => 'issn',
		'expectedTypes' => array('Text')
	);

	/**
	 * Return the 'issn' Property value
	 *
	 * @return	string
	 */
	public static function pIssn()
	{
		return self::getValue(self::$issn);
	}
}
