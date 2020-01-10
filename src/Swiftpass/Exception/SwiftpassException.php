<?php


namespace Xcrms\Swiftpass\Exception;

/***
 * @todo 业务异常
 * Class SwiftpassException
 * @package Xcrms\Swiftpass\Exception
 */
class SwiftpassException extends \Exception
{
    const CODE = 5;

    public function __construct($message = "")
    {
        parent::__construct($message, self::CODE);
    }
}