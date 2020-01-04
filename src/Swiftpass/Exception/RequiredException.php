<?php


namespace Xcrms\Swiftpass\Exception;


/***
 * @todo 参数必填异常
 * Class RequiredException
 * @package Xcrms\Swiftpass\Exception
 */
class RequiredException extends \Exception
{
    const CODE = 1;

    public function __construct($message = "")
    {
        parent::__construct($message, self::CODE);
    }
}