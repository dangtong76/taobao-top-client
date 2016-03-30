<?php

namespace TopClient\request;

/**
 * TOP API: taobao.openim.tribe.join request
 *
 * @author auto create
 * @since  1.0, 2015.08.26
 */
class OpenimTribeJoinRequest
{

    /**
     * 群id
     **/
    private $tribeId;

    /**
     * 用户信息
     **/
    private $user;

    private $apiParas = [ ];


    public function getTribeId()
    {
        return $this->tribeId;
    }


    public function setTribeId($tribeId)
    {
        $this->tribeId              = $tribeId;
        $this->apiParas["tribe_id"] = $tribeId;
    }


    public function getUser()
    {
        return $this->user;
    }


    public function setUser($user)
    {
        $this->user             = $user;
        $this->apiParas["user"] = $user;
    }


    public function getApiMethodName()
    {
        return "taobao.openim.tribe.join";
    }


    public function getApiParas()
    {
        return $this->apiParas;
    }


    public function check()
    {

        RequestCheckUtil::checkNotNull($this->tribeId, "tribeId");
    }


    public function putOtherTextParam($key, $value)
    {
        $this->apiParas[$key] = $value;
        $this->$key           = $value;
    }
}
