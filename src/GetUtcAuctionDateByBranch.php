<?php

namespace MSBios\IaaI;

class GetUtcAuctionDateByBranch
{

    /**
     * @var string $sessionID
     */
    protected $sessionID = null;

    /**
     * @var int $branchcode
     */
    protected $branchcode = null;

    /**
     * @param string $sessionID
     * @param int $branchcode
     */
    public function __construct($sessionID, $branchcode)
    {
      $this->sessionID = $sessionID;
      $this->branchcode = $branchcode;
    }

    /**
     * @return string
     */
    public function getSessionID()
    {
      return $this->sessionID;
    }

    /**
     * @param string $sessionID
     * @return \MSBios\IaaI\GetUtcAuctionDateByBranch
     */
    public function setSessionID($sessionID)
    {
      $this->sessionID = $sessionID;
      return $this;
    }

    /**
     * @return int
     */
    public function getBranchcode()
    {
      return $this->branchcode;
    }

    /**
     * @param int $branchcode
     * @return \MSBios\IaaI\GetUtcAuctionDateByBranch
     */
    public function setBranchcode($branchcode)
    {
      $this->branchcode = $branchcode;
      return $this;
    }

}
