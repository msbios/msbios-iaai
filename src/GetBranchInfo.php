<?php

namespace MSBios\IaaI;

class GetBranchInfo
{

    /**
     * @var string $sessionID
     */
    protected $sessionID = null;

    /**
     * @var int $branchID
     */
    protected $branchID = null;

    /**
     * @param string $sessionID
     * @param int $branchID
     */
    public function __construct($sessionID, $branchID)
    {
      $this->sessionID = $sessionID;
      $this->branchID = $branchID;
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
     * @return \MSBios\IaaI\GetBranchInfo
     */
    public function setSessionID($sessionID)
    {
      $this->sessionID = $sessionID;
      return $this;
    }

    /**
     * @return int
     */
    public function getBranchID()
    {
      return $this->branchID;
    }

    /**
     * @param int $branchID
     * @return \MSBios\IaaI\GetBranchInfo
     */
    public function setBranchID($branchID)
    {
      $this->branchID = $branchID;
      return $this;
    }

}
