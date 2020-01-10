<?php


namespace Xcrms\Swiftpass\Enum;


class ServiceEnum
{
    /***
     * 银联
     */
    const UNION_WAPPAY = 'pay.unionpay.wappay';
    const UNION_APPPAY = 'pay.unionpay.raw.app';
    const UNION_NATIVE = 'pay.unionpay.native';
    const UNION_JSPAY = 'pay.unionpay.jspay';

    /***
     * QQ
     */
    const QQ_JSPAY = 'pay.tenpay.jspay';
    const QQ_NATIVE = 'pay.tenpay.native';
    const QQ_WAPPAY = 'pay.tenpay.wappay';

    /***
     *  JD
     */
    const JD_NATIVE = 'pay.jdpay.native';
    const JD_JSPAY = 'pay.jdpay.jspay';

    /**
     * 统一付款码
     */
    const MICROPAY = 'unified.trade.micropay';

    /**
     * 条码支付
     */
    const NATIVE = 'unified.trade.native';

    /***
     * 微信
     */
    const WX_JSPAY = 'pay.weixin.jspay';
    const WX_TRADE = 'unified.trade.pay';
    const WX_RAW = 'pay.weixin.raw.app';
    const WX_WAPPAY = 'pay.weixin.wappay';

    /**
     *支付宝
     */
    const ALIPAY_NATIVE = 'pay.alipay.native';
    const ALIPAY_JSPAY = 'pay.alipay.jspay';
}