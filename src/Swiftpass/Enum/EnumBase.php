<?php


namespace Xcrms\Swiftpass\Enum;


class EnumBase
{
    public static function getMsg($code){
        return isset(self::MAP[$code])?self::MAP[$code]:'未知';
    }
}