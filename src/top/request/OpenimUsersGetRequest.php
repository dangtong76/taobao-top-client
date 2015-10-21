<?php

namespace TopClient\request;

/**
 * TOP API: taobao.openim.users.get request
 *
 * @author auto create
 * @since  1.0, 2015.01.04
 */
class OpenimUsersGetRequest
{

	/**
	 * uid列表
	 **/
	private $userids;

	private $apiParas = [ ];


	public function getUserids()
	{
		return $this->userids;
	}


	public function setUserids($userids)
	{
		$this->userids             = $userids;
		$this->apiParas["userids"] = $userids;
	}


	public function getApiMethodName()
	{
		return "taobao.openim.users.get";
	}


	public function getApiParas()
	{
		return $this->apiParas;
	}


	public function check()
	{

		RequestCheckUtil::checkNotNull($this->userids, "userids");
		RequestCheckUtil::checkMaxListSize($this->userids, 100, "userids");
	}


	public function putOtherTextParam($key, $value)
	{
		$this->apiParas[$key] = $value;
		$this->$key           = $value;
	}
}
