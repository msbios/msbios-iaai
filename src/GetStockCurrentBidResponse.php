<?php

namespace MSBios\IaaI;

class GetStockCurrentBidResponse
{

    /**
     * @var float $GetStockCurrentBidResult
     */
    protected $GetStockCurrentBidResult = null;

    /**
     * @param float $GetStockCurrentBidResult
     */
    public function __construct($GetStockCurrentBidResult)
    {
      $this->GetStockCurrentBidResult = $GetStockCurrentBidResult;
    }

    /**
     * @return float
     */
    public function getGetStockCurrentBidResult()
    {
      return $this->GetStockCurrentBidResult;
    }

    /**
     * @param float $GetStockCurrentBidResult
     * @return \MSBios\IaaI\GetStockCurrentBidResponse
     */
    public function setGetStockCurrentBidResult($GetStockCurrentBidResult)
    {
      $this->GetStockCurrentBidResult = $GetStockCurrentBidResult;
      return $this;
    }

}
