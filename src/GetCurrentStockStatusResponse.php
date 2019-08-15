<?php

namespace MSBios\IaaI;

class GetCurrentStockStatusResponse
{

    /**
     * @var string $GetCurrentStockStatusResult
     */
    protected $GetCurrentStockStatusResult = null;

    /**
     * @param string $GetCurrentStockStatusResult
     */
    public function __construct($GetCurrentStockStatusResult)
    {
      $this->GetCurrentStockStatusResult = $GetCurrentStockStatusResult;
    }

    /**
     * @return string
     */
    public function getGetCurrentStockStatusResult()
    {
      return $this->GetCurrentStockStatusResult;
    }

    /**
     * @param string $GetCurrentStockStatusResult
     * @return \MSBios\IaaI\GetCurrentStockStatusResponse
     */
    public function setGetCurrentStockStatusResult($GetCurrentStockStatusResult)
    {
      $this->GetCurrentStockStatusResult = $GetCurrentStockStatusResult;
      return $this;
    }

}
