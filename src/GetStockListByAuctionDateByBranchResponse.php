<?php

namespace MSBios\IaaI;

class GetStockListByAuctionDateByBranchResponse
{

    /**
     * @var ArrayOfstring $GetStockListByAuctionDateByBranchResult
     */
    protected $GetStockListByAuctionDateByBranchResult = null;

    /**
     * @param ArrayOfstring $GetStockListByAuctionDateByBranchResult
     */
    public function __construct($GetStockListByAuctionDateByBranchResult)
    {
      $this->GetStockListByAuctionDateByBranchResult = $GetStockListByAuctionDateByBranchResult;
    }

    /**
     * @return ArrayOfstring
     */
    public function getGetStockListByAuctionDateByBranchResult()
    {
      return $this->GetStockListByAuctionDateByBranchResult;
    }

    /**
     * @param ArrayOfstring $GetStockListByAuctionDateByBranchResult
     * @return \MSBios\IaaI\GetStockListByAuctionDateByBranchResponse
     */
    public function setGetStockListByAuctionDateByBranchResult($GetStockListByAuctionDateByBranchResult)
    {
      $this->GetStockListByAuctionDateByBranchResult = $GetStockListByAuctionDateByBranchResult;
      return $this;
    }

}
