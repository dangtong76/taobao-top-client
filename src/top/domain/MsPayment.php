<?php

namespace TopClient\domain;

/**
 * 家装分阶段价格数据结构
 * @author auto create
 */
class MsPayment
{

    /**
     * 订金
     **/
    public $price;

    /**
     * 参考价
     **/
    public $referencePrice;

    /**
     * 尾款可抵扣金额
     **/
    public $voucherPrice;
}

?>