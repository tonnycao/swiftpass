<?php


namespace Xcrms\Swiftpass\Exception;

/***
 * @todo ��ʽ�쳣
 * Class InvalidException
 * @package Xcrms\Swiftpass\Exception
 */
class InvalidException extends \Exception
{
    const CODE = 2;

    public function __construct($message = "")
    {
        parent::__construct($message, self::CODE);
    }

}