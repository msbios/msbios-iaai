<?php

namespace MSBios\IaaI;

class GetChangedStockListByAuctionDateByBranchResponse
{

    /**
     * @var ArrayOfstring $GetChangedStockListByAuctionDateByBranchResult
     */
    protected $GetChangedStockListByAuctionDateByBranchResult = null;

    /**
     * @param ArrayOfstring $GetChangedStockListByAuctionDateByBranchResult
     */
    public function __construct($GetChangedStockListByAuctionDateByBranchResult)
    {
      $this->GetChangedStockListByAuctionDateByBranchResult = $GetChangedStockListByAuctionDateByBranchResult;
    }

    /**
     * @return ArrayOfstring
     */
    public function getGetChangedStockListByAuctionDateByBranchResult()
    {
      return $this->GetChangedStockListByAuctionDateByBranchResult;
    }

    /**
     * @param ArrayOfstring $GetChangedStockListByAuctionDateByBranchResult
     * @return \MSBios\IaaI\GetChangedStockListByAuctionDateByBranchResponse
     */
    public function setGetChangedStockListByAuctionDateByBranchResult($GetChangedStockListByAuctionDateByBranchResult)
    {
      $this->GetChangedStockListByAuctionDateByBranchResult = $GetChangedStockListByAuctionDateByBranchResult;
      return $this;
    }

}
