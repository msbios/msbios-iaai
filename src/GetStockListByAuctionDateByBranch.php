<?php

namespace MSBios\IaaI;

class GetStockListByAuctionDateByBranch
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
     * @var \DateTime $AuctionDate
     */
    protected $AuctionDate = null;

    /**
     * @param string $sessionID
     * @param int $branchcode
     * @param \DateTime $AuctionDate
     */
    public function __construct($sessionID, $branchcode, \DateTime $AuctionDate)
    {
      $this->sessionID = $sessionID;
      $this->branchcode = $branchcode;
      $this->AuctionDate = $AuctionDate->format(\DateTime::ATOM);
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
     * @return \MSBios\IaaI\GetStockListByAuctionDateByBranch
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
     * @return \MSBios\IaaI\GetStockListByAuctionDateByBranch
     */
    public function setBranchcode($branchcode)
    {
      $this->branchcode = $branchcode;
      return $this;
    }

    /**
     * @return \DateTime
     */
    public function getAuctionDate()
    {
      if ($this->AuctionDate == null) {
        return null;
      } else {
        try {
          return new \DateTime($this->AuctionDate);
        } catch (\Exception $e) {
          return false;
        }
      }
    }

    /**
     * @param \DateTime $AuctionDate
     * @return \MSBios\IaaI\GetStockListByAuctionDateByBranch
     */
    public function setAuctionDate(\DateTime $AuctionDate)
    {
      $this->AuctionDate = $AuctionDate->format(\DateTime::ATOM);
      return $this;
    }

}
