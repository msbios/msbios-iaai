<?php
/**
 * @access protected
 * @author Judzhin Miles <judzhin[at]gns-it.com>
 */
namespace MSBios\IaaI;

/**
 * Class GetStockCurrentBid
 * @package MSBios\IaaI
 */
class GetStockCurrentBid
{

    /**
     * @var string $sessionID
     */
    protected $sessionID = null;

    /**
     * @var string $stockNumber
     */
    protected $stockNumber = null;

    /**
     * @var int $branchcode
     */
    protected $branchcode = null;

    /**
     * @param string $sessionID
     * @param string $stockNumber
     * @param int $branchcode
     */
    public function __construct($sessionID, $stockNumber, $branchcode)
    {
      $this->sessionID = $sessionID;
      $this->stockNumber = $stockNumber;
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
     * @return \MSBios\IaaI\GetStockCurrentBid
     */
    public function setSessionID($sessionID)
    {
      $this->sessionID = $sessionID;
      return $this;
    }

    /**
     * @return string
     */
    public function getStockNumber()
    {
      return $this->stockNumber;
    }

    /**
     * @param string $stockNumber
     * @return \MSBios\IaaI\GetStockCurrentBid
     */
    public function setStockNumber($stockNumber)
    {
      $this->stockNumber = $stockNumber;
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
     * @return \MSBios\IaaI\GetStockCurrentBid
     */
    public function setBranchcode($branchcode)
    {
      $this->branchcode = $branchcode;
      return $this;
    }

}
