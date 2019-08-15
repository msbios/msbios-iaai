<?php

namespace MSBios\IaaI;

class GetIBuyFastStocksResponse
{

    /**
     * @var string $GetIBuyFastStocksResult
     */
    protected $GetIBuyFastStocksResult = null;

    /**
     * @param string $GetIBuyFastStocksResult
     */
    public function __construct($GetIBuyFastStocksResult)
    {
      $this->GetIBuyFastStocksResult = $GetIBuyFastStocksResult;
    }

    /**
     * @return string
     */
    public function getGetIBuyFastStocksResult()
    {
      return $this->GetIBuyFastStocksResult;
    }

    /**
     * @param string $GetIBuyFastStocksResult
     * @return \MSBios\IaaI\GetIBuyFastStocksResponse
     */
    public function setGetIBuyFastStocksResult($GetIBuyFastStocksResult)
    {
      $this->GetIBuyFastStocksResult = $GetIBuyFastStocksResult;
      return $this;
    }

}
