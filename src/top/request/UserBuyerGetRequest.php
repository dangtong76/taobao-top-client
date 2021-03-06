<?php

namespace TopClient\request;

use TopClient\RequestCheckUtil;

/**
 * TOP API: taobao.user.buyer.get request
 *
 * @author auto create
 * @since  1.0, 2015.06.16
 */
class UserBuyerGetRequest
{

    /**
     * 只返回nick, avatar参数
     **/
    private $fields;

    private $apiParas = [ ];


    public function getFields()
    {
        return $this->fields;
    }


    public function setFields($fields)
    {
        $this->fields             = $fields;
        $this->apiParas["fields"] = $fields;
    }


    public function getApiMethodName()
    {
        return "taobao.user.buyer.get";
    }


    public function getApiParas()
    {
        return $this->apiParas;
    }


    public function check()
    {

        RequestCheckUtil::checkNotNull($this->fields, "fields");
    }


    public function putOtherTextParam($key, $value)
    {
        $this->apiParas[$key] = $value;
        $this->$key           = $value;
    }
}
