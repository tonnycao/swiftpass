<?php


namespace Xcrms\Swiftpass\Exception;


/***
 * @todo �����쳣
 * Class CurlException
 * @package Xcrms\Alipay\Exception
 */
class CurlException extends \Exception
{
    const CODE =3;

    public function __construct($message = "")
    {
        parent::__construct($message, self::CODE);
    }

}