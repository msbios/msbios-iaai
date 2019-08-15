<?php

namespace MSBios\IaaI;

class GetStockInfoResponse
{

    /**
     * @var string $GetStockInfoResult
     */
    protected $GetStockInfoResult = null;

    /**
     * @param string $GetStockInfoResult
     */
    public function __construct($GetStockInfoResult)
    {
      $this->GetStockInfoResult = $GetStockInfoResult;
    }

    /**
     * @return string
     */
    public function getGetStockInfoResult()
    {
      return $this->GetStockInfoResult;
    }

    /**
     * @param string $GetStockInfoResult
     * @return \MSBios\IaaI\GetStockInfoResponse
     */
    public function setGetStockInfoResult($GetStockInfoResult)
    {
      $this->GetStockInfoResult = $GetStockInfoResult;
      return $this;
    }

}
