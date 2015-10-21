<?php

namespace TopClient\request;

/**
 * TOP API: taobao.open.account.update request
 *
 * @author auto create
 * @since  1.0, 2015.08.17
 */
class OpenAccountUpdateRequest
{

	/**
	 * Open Account
	 **/
	private $paramList;

	private $apiParas = [ ];


	public function getParamList()
	{
		return $this->paramList;
	}


	public function setParamList($paramList)
	{
		$this->paramList              = $paramList;
		$this->apiParas["param_list"] = $paramList;
	}


	public function getApiMethodName()
	{
		return "taobao.open.account.update";
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
