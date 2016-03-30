<?php

namespace TopClient\request;

/**
 * TOP API: taobao.item.propimg.delete request
 *
 * @author auto create
 * @since  1.0, 2015.02.05
 */
class ItemPropimgDeleteRequest
{

    /**
     * 商品属性图片ID
     **/
    private $id;

    /**
     * 商品数字ID，必选
     **/
    private $numIid;

    private $apiParas = [ ];


    public function getId()
    {
        return $this->id;
    }


    public function setId($id)
    {
        $this->id             = $id;
        $this->apiParas["id"] = $id;
    }


    public function getNumIid()
    {
        return $this->numIid;
    }


    public function setNumIid($numIid)
    {
        $this->numIid              = $numIid;
        $this->apiParas["num_iid"] = $numIid;
    }


    public function getApiMethodName()
    {
        return "taobao.item.propimg.delete";
    }


    public function getApiParas()
    {
        return $this->apiParas;
    }


    public function check()
    {

        RequestCheckUtil::checkNotNull($this->id, "id");
        RequestCheckUtil::checkNotNull($this->numIid, "numIid");
        RequestCheckUtil::checkMinValue($this->numIid, 0, "numIid");
    }


    public function putOtherTextParam($key, $value)
    {
        $this->apiParas[$key] = $value;
        $this->$key           = $value;
    }
}
