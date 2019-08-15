<?php

namespace MSBios\IaaI;

class GetStocksRecentBidsResponse
{

    /**
     * @var ArrayOfstring $GetStocksRecentBidsResult
     */
    protected $GetStocksRecentBidsResult = null;

    /**
     * @param ArrayOfstring $GetStocksRecentBidsResult
     */
    public function __construct($GetStocksRecentBidsResult)
    {
      $this->GetStocksRecentBidsResult = $GetStocksRecentBidsResult;
    }

    /**
     * @return ArrayOfstring
     */
    public function getGetStocksRecentBidsResult()
    {
      return $this->GetStocksRecentBidsResult;
    }

    /**
     * @param ArrayOfstring $GetStocksRecentBidsResult
     * @return \MSBios\IaaI\GetStocksRecentBidsResponse
     */
    public function setGetStocksRecentBidsResult($GetStocksRecentBidsResult)
    {
      $this->GetStocksRecentBidsResult = $GetStocksRecentBidsResult;
      return $this;
    }

}
