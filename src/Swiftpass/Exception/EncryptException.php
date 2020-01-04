<?php


namespace Xcrms\Swiftpass\Exception;

/***
 * @todo ¼ÓÃÜÇ©ÃûÒì³£
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