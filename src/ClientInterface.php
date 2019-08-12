<?php
/**
 * @access protected
 * @author Judzhin Miles <judzhin[at]gns-it.com>
 */
namespace MSBios\IaaI;

/**
 * Interface ClientInterface
 * @package MSBios\IaaI
 */
interface ClientInterface
{
    /**
     * @param Login $parameters
     * @return mixed
     */
    public function Login(Login $parameters);

    /**
     * @param BranchListParameters $parameters
     * @return BranchListResponse
     */
    public function GetBranchList(BranchListParameters $parameters);

    /**
     * @param BranchInfoParameters $parameters
     * @return BranchInfoResponse
     */
    public function GetBranchInfo(BranchInfoParameters $parameters);

    /**
     * @param ChangedStockListByLastAccessParameters $parameters
     * @return ChangedStockListByLastAccessResponse
     */
    public function GetChangedStockListByLastAccess(ChangedStockListByLastAccessParameters $parameters);

    /**
     * @param StockInfoParameters $parameters
     * @return StockInfoResponse
     */
    public function GetStockInfo(StockInfoParameters $parameters);

    /**
     * @param StockCurrentBidParameters $parameters
     * @return StockCurrentBidResponse
     */
    public function GetStockCurrentBid(StockCurrentBidParameters $parameters);

    /**
     * @param AuctionDateListByBranchParameters $parameters
     * @return AuctionDateListByBranchResponse
     */
    public function GetAuctionDateListByBranch(AuctionDateListByBranchParameters $parameters);

    /**
     * @param StockListByAuctionDateByBranchParameters $parameters
     * @return StockListByAuctionDateByBranchResponse
     */
    public function GetStockListByAuctionDateByBranch(StockListByAuctionDateByBranchParameters $parameters);

    /**
     * @param ChangedStockListByAuctionDateByBranchParameters $parameters
     * @return ChangedStockListByAuctionDateByBranchResponse
     */
    public function GetChangedStockListByAuctionDateByBranch(ChangedStockListByAuctionDateByBranchParameters $parameters);

    /**
     * @param StocksRecentBidsParameters $parameters
     * @return StocksRecentBidsResponse
     */
    public function GetStocksRecentBids(StocksRecentBidsParameters $parameters);

    /**
     * @param IBuyFastStocksParameters $parameters
     * @return IBuyFastStocksResponse
     */
    public function GetIBuyFastStocks(IBuyFastStocksParameters $parameters);

    /**
     * @param UtcAuctionDateByBranchParameters $parameters
     * @return UtcAuctionDateByBranchResponse
     */
    public function GetUtcAuctionDateByBranch(UtcAuctionDateByBranchParameters $parameters);

    /**
     * @param CurrentStockStatusParameters $parameters
     * @return CurrentStockStatusResponse
     */
    public function GetCurrentStockStatus(CurrentStockStatusParameters $parameters);
}
