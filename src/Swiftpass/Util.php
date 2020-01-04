<?php


namespace Xcrms\Swiftpass;


class Util
{
    /***
     * @todo MD5签名
     * @param $key
     * @param $params
     * @return string
     */
    public static function createMD5Sign($key,$params)
    {
        $signPars = "";
        ksort($params);
        foreach($params as $k => $v) {
            if("" != $v && "sign" != $k) {
                $signPars .= $k . "=" . $v . "&";
            }
        }
        $signPars .= "key=" . $key;
        $sign = strtoupper(md5($signPars));
        return $sign;
    }

    /***
     * @todo RSA私钥签名
     * @param $private_key
     * @param $params
     * @param $type
     * @return string
     */
    public static function createRSASign($private_key,$params,$type)
    {

        $signPars = "";
        ksort($params);
        foreach($params as $k => $v) {
            if("" != $v && "sign" != $k) {
                $signPars .= $k . "=" . $v . "&";
            }
        }

        $signPars = substr($signPars, 0, strlen($signPars) - 1);
        $res = openssl_get_privatekey($private_key);
        if ($type == 'RSA_1_1') {
            openssl_sign($signPars, $sign, $res);
        } else if ($type == 'RSA_1_256') {
            openssl_sign($signPars, $sign, $res, OPENSSL_ALGO_SHA256);
        }
        openssl_free_key($res);
        $sign = base64_encode($sign);
        return $sign;
    }

    /***
     * @todo RSA公钥验签
     * @param $public_key
     * @param $parameters
     * @return bool
     */
   public static function verifyRSASign($public_key, $parameters) {
        $signPars = "";
        ksort($parameters);
        foreach($parameters as $k => $v) {
            if("sign" != $k && "" != $v) {
                $signPars .= $k . "=" . $v . "&";
            }
        }

        $signPars = substr($signPars, 0, strlen($signPars) - 1);
        $res = openssl_get_publickey($public_key);
        if ($parameters['sign_type'] == 'RSA_1_1') {
            $result = (bool)openssl_verify($signPars, base64_decode($parameters["sign"]), $res);
        } else if($parameters['sign_type'] == 'RSA_1_256') {
            $result = (bool)openssl_verify($signPars, base64_decode($parameters["sign"]), $res, OPENSSL_ALGO_SHA256);

        }
       openssl_free_key($res);
       return $result;
    }

    /***
     * @todo 数组转XML字符串
     * @param $array
     * @return string
     */
    public static function toXml($array){
        $xml = '<xml>';
        forEach($array as $k=>$v){
            $xml.='<'.$k.'><![CDATA['.$v.']]></'.$k.'>';
        }
        $xml.='</xml>';
        return $xml;
    }

    /***
     * @todo 解析XML
     * @param $xmlSrc
     * @return array|bool
     */
	public static function parseXML($xmlSrc){
        if(empty($xmlSrc)){
            return false;
        }
        $array = array();
        libxml_disable_entity_loader(true);
        $xml = simplexml_load_string($xmlSrc);
        $encode = Utils::getXmlEncode($xmlSrc);

        if($xml && $xml->children()) {
			foreach ($xml->children() as $node){
				//有子节点
				if($node->children()) {
					$k = $node->getName();
					$nodeXml = $node->asXML();
					$v = substr($nodeXml, strlen($k)+2, strlen($nodeXml)-2*strlen($k)-5);
					
				} else {
					$k = $node->getName();
					$v = (string)$node;
				}
				
				if($encode!="" && $encode != "UTF-8") {
					$k = iconv("UTF-8", $encode, $k);
					$v = iconv("UTF-8", $encode, $v);
				}
				$array[$k] = $v;
			}
		}
        return $array;
    }

    /***
     * @todo 获取xml编码
     * @param $xml
     * @return string
     */
	public static function getXmlEncode($xml) {
		$ret = preg_match ("/<?xml[^>]* encoding=\"(.*)\"[^>]* ?>/i", $xml, $arr);
		if($ret) {
			return strtoupper ( $arr[1] );
		} else {
			return "";
		}
	}
	
}