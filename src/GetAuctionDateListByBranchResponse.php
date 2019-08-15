<?php

namespace MSBios\IaaI;

class GetAuctionDateListByBranchResponse
{

    /**
     * @var ArrayOfstring $GetAuctionDateListByBranchResult
     */
    protected $GetAuctionDateListByBranchResult = null;

    /**
     * @param ArrayOfstring $GetAuctionDateListByBranchResult
     */
    public function __construct($GetAuctionDateListByBranchResult)
    {
      $this->GetAuctionDateListByBranchResult = $GetAuctionDateListByBranchResult;
    }

    /**
     * @return ArrayOfstring
     */
    public function getGetAuctionDateListByBranchResult()
    {
      return $this->GetAuctionDateListByBranchResult;
    }

    /**
     * @param ArrayOfstring $GetAuctionDateListByBranchResult
     * @return \MSBios\IaaI\GetAuctionDateListByBranchResponse
     */
    public function setGetAuctionDateListByBranchResult($GetAuctionDateListByBranchResult)
    {
      $this->GetAuctionDateListByBranchResult = $GetAuctionDateListByBranchResult;
      return $this;
    }

}
