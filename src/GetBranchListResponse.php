<?php

namespace MSBios\IaaI;

class GetBranchListResponse
{

    /**
     * @var ArrayOfint $GetBranchListResult
     */
    protected $GetBranchListResult = null;

    /**
     * @param ArrayOfint $GetBranchListResult
     */
    public function __construct($GetBranchListResult)
    {
      $this->GetBranchListResult = $GetBranchListResult;
    }

    /**
     * @return ArrayOfint
     */
    public function getGetBranchListResult()
    {
      return $this->GetBranchListResult;
    }

    /**
     * @param ArrayOfint $GetBranchListResult
     * @return \MSBios\IaaI\GetBranchListResponse
     */
    public function setGetBranchListResult($GetBranchListResult)
    {
      $this->GetBranchListResult = $GetBranchListResult;
      return $this;
    }

}
