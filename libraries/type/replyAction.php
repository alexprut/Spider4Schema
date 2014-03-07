<?php
/**
 * The act of responding to a question/message asked/sent by the object. Related to AskAction.Related actions:AskAction: Appears generally as an origin of a ReplyAction.
 *
 * @see    http://schema.org/ReplyAction
*/
abstract class TypeReplyAction extends TypeCommunicateAction
{
	/**
	 * The Schema.org Type Scope
	 *
	 * @var string
	 */
	protected static $scope = 'https://schema.org/ReplyAction';
}
