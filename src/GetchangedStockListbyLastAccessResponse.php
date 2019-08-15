<?php

namespace MSBios\IaaI;

class GetchangedStockListbyLastAccessResponse
{

    /**
     * @var ArrayOfstring $GetchangedStockListbyLastAccessResult
     */
    protected $GetchangedStockListbyLastAccessResult = null;

    /**
     * @param ArrayOfstring $GetchangedStockListbyLastAccessResult
     */
    public function __construct($GetchangedStockListbyLastAccessResult)
    {
      $this->GetchangedStockListbyLastAccessResult = $GetchangedStockListbyLastAccessResult;
    }

    /**
     * @return ArrayOfstring
     */
    public function getGetchangedStockListbyLastAccessResult()
    {
      return $this->GetchangedStockListbyLastAccessResult;
    }

    /**
     * @param ArrayOfstring $GetchangedStockListbyLastAccessResult
     * @return \MSBios\IaaI\GetchangedStockListbyLastAccessResponse
     */
    public function setGetchangedStockListbyLastAccessResult($GetchangedStockListbyLastAccessResult)
    {
      $this->GetchangedStockListbyLastAccessResult = $GetchangedStockListbyLastAccessResult;
      return $this;
    }

}
