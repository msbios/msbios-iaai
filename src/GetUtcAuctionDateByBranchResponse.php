<?php

namespace MSBios\IaaI;

class GetUtcAuctionDateByBranchResponse
{

    /**
     * @var string $GetUtcAuctionDateByBranchResult
     */
    protected $GetUtcAuctionDateByBranchResult = null;

    /**
     * @param string $GetUtcAuctionDateByBranchResult
     */
    public function __construct($GetUtcAuctionDateByBranchResult)
    {
      $this->GetUtcAuctionDateByBranchResult = $GetUtcAuctionDateByBranchResult;
    }

    /**
     * @return string
     */
    public function getGetUtcAuctionDateByBranchResult()
    {
      return $this->GetUtcAuctionDateByBranchResult;
    }

    /**
     * @param string $GetUtcAuctionDateByBranchResult
     * @return \MSBios\IaaI\GetUtcAuctionDateByBranchResponse
     */
    public function setGetUtcAuctionDateByBranchResult($GetUtcAuctionDateByBranchResult)
    {
      $this->GetUtcAuctionDateByBranchResult = $GetUtcAuctionDateByBranchResult;
      return $this;
    }

}
