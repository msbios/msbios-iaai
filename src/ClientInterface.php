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
     * @return LoginResponse
     */
    public function Login(Login $parameters): LoginResponse;

    /**
     * @param GetBranchList $parameters
     * @return GetBranchListResponse
     */
    public function GetBranchList(GetBranchList $parameters): GetBranchListResponse;

    /**
     * @param GetBranchInfo $parameters
     * @return GetBranchInfoResponse
     */
    public function GetBranchInfo(GetBranchInfo $parameters): GetBranchInfoResponse;

    /**
     * @param GetchangedStockListbyLastAccess $parameters
     * @return GetchangedStockListbyLastAccessResponse
     */
    public function GetchangedStockListbyLastAccess(GetchangedStockListbyLastAccess $parameters): GetchangedStockListbyLastAccessResponse;

    /**
     * @param GetStockInfo $parameters
     * @return GetStockInfoResponse
     */
    public function GetStockInfo(GetStockInfo $parameters): GetStockInfoResponse;

    /**
     * @param GetStockCurrentBid $parameters
     * @return GetStockCurrentBidResponse
     */
    public function GetStockCurrentBid(GetStockCurrentBid $parameters): GetStockCurrentBidResponse;

    /**
     * @param GetAuctionDateListByBranch $parameters
     * @return GetAuctionDateListByBranchResponse
     */
    public function GetAuctionDateListByBranch(GetAuctionDateListByBranch $parameters): GetAuctionDateListByBranchResponse;

    /**
     * @param GetStockListByAuctionDateByBranch $parameters
     * @return GetStockListByAuctionDateByBranchResponse
     */
    public function GetStockListByAuctionDateByBranch(GetStockListByAuctionDateByBranch $parameters): GetStockListByAuctionDateByBranchResponse;

    /**
     * @param GetChangedStockListByAuctionDateByBranch $parameters
     * @return GetChangedStockListByAuctionDateByBranchResponse
     */
    public function GetChangedStockListByAuctionDateByBranch(GetChangedStockListByAuctionDateByBranch $parameters): GetChangedStockListByAuctionDateByBranchResponse;

    /**
     * @param GetStocksRecentBids $parameters
     * @return GetStocksRecentBidsResponse
     */
    public function GetStocksRecentBids(GetStocksRecentBids $parameters): GetStocksRecentBidsResponse;

    /**
     * @param GetIBuyFastStocks $parameters
     * @return GetIBuyFastStocksResponse
     */
    public function GetIBuyFastStocks(GetIBuyFastStocks $parameters): GetIBuyFastStocksResponse;

    /**
     * @param GetUtcAuctionDateByBranch $parameters
     * @return GetUtcAuctionDateByBranchResponse
     */
    public function GetUtcAuctionDateByBranch(GetUtcAuctionDateByBranch $parameters): GetUtcAuctionDateByBranchResponse;

    /**
     * @param GetCurrentStockStatus $parameters
     * @return GetCurrentStockStatusResponse
     */
    public function GetCurrentStockStatus(GetCurrentStockStatus $parameters): GetCurrentStockStatusResponse;
}
