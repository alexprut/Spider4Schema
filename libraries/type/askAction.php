<?php
/**
 * The act of posing a question / favor to someone.Related actions:ReplyAction: Appears generally as a response to AskAction.
 *
 * @see    http://schema.org/AskAction
 * @since  1.0
*/
abstract class TypeAskAction extends TypeCommunicateAction
{
	/**
	 * The Schema.org Type Scope
	 *
	 * @var string
	 */
	protected static $scope = 'https://schema.org/AskAction';

	/**
	 * A sub property of object. A question.
	 * Expected Type: Text
	 * 
	 * @var	array
	 */
	protected static $question = array('value' => 'question',
		'expectedTypes' => array('Text')
	);

	/**
	 * Return the 'question' Property value
	 *
	 * @return	string
	 */
	public static function pQuestion()
	{
		return self::getValue(self::$question);
	}
}
