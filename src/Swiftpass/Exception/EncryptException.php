<?php


namespace Xcrms\Swiftpass\Exception;

/***
 * @todo ����ǩ���쳣
 * Class EncryptException
 * @package Xcrms\Swiftpass\Exception
 */

class EncryptException extends \Exception
{
    const CODE = 4;

    public function __construct($message = "")
    {
        parent::__construct($message,self::CODE);
    }
}