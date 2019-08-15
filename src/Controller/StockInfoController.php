<?php
/**
 * @access protected
 * @author Judzhin Miles <info[woof-woof]msbios.com>
 */

namespace MSBios\IaaI\Controller;

use MSBios\IaaI\ClientInterface;
use MSBios\IaaI\GetBranchList;
use MSBios\IaaI\GetStockInfo;
use MSBios\IaaI\GetStockListByAuctionDateByBranch;
use MSBios\IaaI\LoginResponse;
use MSBios\IaaI\Updater\StockInfoUpdater;
use Zend\Mvc\Controller\AbstractActionController;

/**
 * Class StockInfoController
 * @package MSBios\IaaI\Controller
 */
class StockInfoController extends AbstractActionController
{
    /** @var ClientInterface */
    protected $client;

    /** @var LoginResponse  */
    protected $loginResponse;

    /** @var StockInfoUpdater */
    protected $updater;

    /**
     * StockInfoController constructor.
     * @param ClientInterface $client
     * @param LoginResponse $loginResponse
     * @param StockInfoUpdater $updater
     */
    public function __construct(ClientInterface $client, LoginResponse $loginResponse, StockInfoUpdater $updater)
    {
        $this->client = $client;
        $this->loginResponse = $loginResponse;
        $this->updater = $updater;
    }

    /**
     * @return string
     */
    protected function getSessionID()
    {
        return $this->loginResponse->getLoginResult();
    }

    /**
     * @param string $regionName
     * @return \MSBios\IaaI\ArrayOfint
     */
    protected function getBranchList($regionName = '')
    {
        return $this->client->GetBranchList(
            new GetBranchList($this->getSessionID(), $regionName)
        )->getGetBranchListResult();
    }

    /**
     * @param $branchCode
     * @return \MSBios\IaaI\ArrayOfstring
     */
    protected function getStocksByAuctionDateByBranch($branchCode)
    {
        return $this->client->GetStockListByAuctionDateByBranch(new GetStockListByAuctionDateByBranch(
            $this->getSessionID(), $branchCode, (new \DateTime)->add(new \DateInterval('P2D'))
        ))->getGetStockListByAuctionDateByBranchResult();
    }

    /**
     * @param $stockNumber
     * @param $branchCode
     * @return string
     */
    protected function getStockInfo($stockNumber, $branchCode)
    {
        return $this->client->GetStockInfo(
            new GetStockInfo($this->getSessionID(), $stockNumber, $branchCode)
        )->getGetStockInfoResult();
    }

    /**
     *
     */
    public function synchAction(): void
    {
        /** @var string $branchCode */
        foreach ($this->getBranchList() as $branchCode) {

            /** @var string $stockNumber */
            foreach ($this->getStocksByAuctionDateByBranch($branchCode) as $stockNumber) {
                $this->updater->updateItems([$this->getStockInfo($stockNumber, $branchCode)]);
            }
        }
    }
}