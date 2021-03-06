<?php

namespace TopClient\request;

/**
 * TOP API: taobao.openim.users.add request
 *
 * @author auto create
 * @since  1.0, 2015.09.09
 */
class OpenimUsersAddRequest
{

    /**
     * 用户信息列表
     **/
    private $userinfos;

    private $apiParas = [ ];


    public function getUserinfos()
    {
        return $this->userinfos;
    }


    public function setUserinfos($userinfos)
    {
        $this->userinfos             = $userinfos;
        $this->apiParas["userinfos"] = $userinfos;
    }


    public function getApiMethodName()
    {
        return "taobao.openim.users.add";
    }


    public function getApiParas()
    {
        return $this->apiParas;
    }


    public function check()
    {

    }


    public function putOtherTextParam($key, $value)
    {
        $this->apiParas[$key] = $value;
        $this->$key           = $value;
    }
}
