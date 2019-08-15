<?php

namespace MSBios\IaaI;

class GetBranchInfoResponse
{

    /**
     * @var string $GetBranchInfoResult
     */
    protected $GetBranchInfoResult = null;

    /**
     * @param string $GetBranchInfoResult
     */
    public function __construct($GetBranchInfoResult)
    {
      $this->GetBranchInfoResult = $GetBranchInfoResult;
    }

    /**
     * @return string
     */
    public function getGetBranchInfoResult()
    {
      return $this->GetBranchInfoResult;
    }

    /**
     * @param string $GetBranchInfoResult
     * @return \MSBios\IaaI\GetBranchInfoResponse
     */
    public function setGetBranchInfoResult($GetBranchInfoResult)
    {
      $this->GetBranchInfoResult = $GetBranchInfoResult;
      return $this;
    }

}
