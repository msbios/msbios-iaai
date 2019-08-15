<?php

namespace MSBios\IaaI;

class GetchangedStockListbyLastAccess
{

    /**
     * @var string $sessionID
     */
    protected $sessionID = null;

    /**
     * @param string $sessionID
     */
    public function __construct($sessionID)
    {
      $this->sessionID = $sessionID;
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
     * @return \MSBios\IaaI\GetchangedStockListbyLastAccess
     */
    public function setSessionID($sessionID)
    {
      $this->sessionID = $sessionID;
      return $this;
    }

}
