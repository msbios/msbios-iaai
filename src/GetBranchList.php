<?php

namespace MSBios\IaaI;

class GetBranchList
{

    /**
     * @var string $sessionID
     */
    protected $sessionID = null;

    /**
     * @var string $regionName
     */
    protected $regionName = null;

    /**
     * @param string $sessionID
     * @param string $regionName
     */
    public function __construct($sessionID, $regionName)
    {
      $this->sessionID = $sessionID;
      $this->regionName = $regionName;
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
     * @return \MSBios\IaaI\GetBranchList
     */
    public function setSessionID($sessionID)
    {
      $this->sessionID = $sessionID;
      return $this;
    }

    /**
     * @return string
     */
    public function getRegionName()
    {
      return $this->regionName;
    }

    /**
     * @param string $regionName
     * @return \MSBios\IaaI\GetBranchList
     */
    public function setRegionName($regionName)
    {
      $this->regionName = $regionName;
      return $this;
    }

}
