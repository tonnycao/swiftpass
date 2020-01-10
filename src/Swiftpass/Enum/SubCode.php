<?php


namespace Xcrms\Swiftpass\Enum;


class SubCode extends EnumBase
{

    const MAP = [
        'sub_appid and sub_openid not match'=>'商户公众号appid和用户openid不匹配',
        '受理机构必须传入sub_mch_id'=>'受理机构必须传入sub_mch_id',
        '受理关系不存在'=>'受理关系不存在',
        '消费超过该商户支持的限额'=>'调用支付时金额超出商户支持的限额',
        'sub_openid is invalid'=>'sub_openid参数的值无效',
        'valid error'=>'验证商户交易权限',
        'transaction internal error'=>'第三方接口调用',
        'unsupportapi'=>'不支持的交易类型',
        "valid mch'groupno fail"=>'通过父级商户号和子商户号获取子商户',
        'Internal error'=>'支付网关返回状态非200',
        'valid sign fail'=>'验证数据签名',
        'valid service fail'=>'验证支付业务',
        'valid mch status fail'=>'该商户已经被冻结',
        'valid pay gateway result no sign'=>'返回结果失败',
        'refundInfo is exists'=>'该退款请求已存在',
        'notify internal error'=>'商户号通知异常',
        'valid param fail'=>'请求参数不合法',
        'valid flow fail'=>'请求过于频繁',
        'Order not exists'=>'订单不存在',
        'valid mch status fail'=>'商户状态异常',
        'Auth valid fail'=>'授权验证失败',
        'Order paid'=>'订单已支付',
        'Signature error'=>'签名错误,参数签名结果不正确',
        'total_fee:Invalid'=>'金额无效，金额单位是分，不能有小数点',
        'total_fee:Must be greater or equal to [1]'=>'金额必须大于等于1',
        'total_fee:Must be less or equal to [5000000]'=>'金额必须小于或等于5000000',
        'Parse xml error,please use UTF-8 encoded'=>'xml参数解析出错，且编码格式必须utf-8',
        'unsupported sign method'=>'不支持的签名方法',
        '*:Maximum length is [*]'=>'字段超长',
        'thi_mch_id is required'=>'商户配置不完整',
        'BALANCE_NOT_ENOUGH'=>'余额不足',
        'buyer_logon_id|buyer_id is required'=>'请检查buyer_logon_id|buyer_id',
        'USERPAYING'=>'用户支付中，需要输入密码',
        'NOTENOUGH'=>'余额不足',
        'ORDERPAID'=>'订单已支付,订单号重复',
        'REFUNDINFOTEXIST'=>'退款已存在',
        'ORDERNOTEXIST'=>'订单不存在',
        'ACQ.TRADE_NOT_EXIST'=>'支付宝.交易不存在',
        'AUTH_CODE_INVALID'=>'授权码检验错误',
        'OUT_TRADE_NO_USED'=>'商户订单号重复',
        'ACCOUNTERROR'=>'账户错误',
        'ORDERSTATUSERROR'=>'订单状态异常',
        'ORDERISEXIST'=>'订单已存在',
        'ORDERREVERSED'=>'订单已撤销',
        'ORDER_SUCCESS_PAY_INPROCESS'=>'',
        'RULELIMIT'=>'',
        'SYSTEMERROR'=>'接口返回错误系统超时',
        'REFUND_FEE_INVALID'=>'退款金额错误'
    ];

    public static  function getMsg($code){
            return isset(self::MAP[$code])?self::MAP[$code]:'未知';
    }
}