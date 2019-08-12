<?php
/**
 * @access protected
 * @author Judzhin Miles <info[woof-woof]msbios.com>
 */

if (file_exists(__DIR__ . '/../vendor/autoload.php')) {
    include_once __DIR__ . '/../vendor/autoload.php';
} elseif (file_exists(__DIR__ . '/../../../autoload.php')) {
    include_once __DIR__ . '/../../../autoload.php';
} else {
    throw new RuntimeException('Error: vendor/autoload.php could not be found. Did you run php composer.phar install?');
}

/** @var \MSBios\IaaI\ClientInterface $service */
$service = new \MSBios\IaaI\Client(__DIR__ . '/../DDRService.wsdl',  [
    'compression' => SOAP_COMPRESSION_ACCEPT,
    'classmap' => [
        //'ArrayOfint' => 'App\\IaaI\\ArrayOfint',
        //'ArrayOfstring' => 'App\\IaaI\\ArrayOfstring',
        //'InvalidOperationException' => 'App\\IaaI\\InvalidOperationException',
        //'SystemException' => 'App\\IaaI\\SystemException',
        //'Exception' => 'App\\IaaI\\Exception',
        'Login' => \MSBios\IaaI\Login::class,
        //'LoginResponse' => 'App\\IaaI\\LoginResponse',
        //'GetBranchList' => 'App\\IaaI\\GetBranchList',
        //'GetBranchListResponse' => 'App\\IaaI\\GetBranchListResponse',
        //'GetBranchInfo' => 'App\\IaaI\\GetBranchInfo',
        //'GetBranchInfoResponse' => 'App\\IaaI\\GetBranchInfoResponse',
        //'GetchangedStockListbyLastAccess' => 'App\\IaaI\\GetchangedStockListbyLastAccess',
        //'GetchangedStockListbyLastAccessResponse' => 'App\\IaaI\\GetchangedStockListbyLastAccessResponse',
        //'GetStockInfo' => 'App\\IaaI\\GetStockInfo',
        //'GetStockInfoResponse' => 'App\\IaaI\\GetStockInfoResponse',
        //'GetAuctionDateListByBranch' => 'App\\IaaI\\GetAuctionDateListByBranch',
        //'GetAuctionDateListByBranchResponse' => 'App\\IaaI\\GetAuctionDateListByBranchResponse',
        //'GetStockListByAuctionDateByBranch' => 'App\\IaaI\\GetStockListByAuctionDateByBranch',
        //'GetStockListByAuctionDateByBranchResponse' => 'App\\IaaI\\GetStockListByAuctionDateByBranchResponse',
        //'GetStocksRecentBids' => 'App\\IaaI\\GetStocksRecentBids',
        //'GetStocksRecentBidsResponse' => 'App\\IaaI\\GetStocksRecentBidsResponse',
        //'GetStockCurrentBid' => 'App\\IaaI\\GetStockCurrentBid',
        //'GetStockCurrentBidResponse' => 'App\\IaaI\\GetStockCurrentBidResponse',
        //'GetChangedStockListByAuctionDateByBranch' => 'App\\IaaI\\GetChangedStockListByAuctionDateByBranch',
        //'GetChangedStockListByAuctionDateByBranchResponse' => 'App\\IaaI\\GetChangedStockListByAuctionDateByBranchResponse',
        //'GetIBuyFastStocks' => 'App\\IaaI\\GetIBuyFastStocks',
        //'GetIBuyFastStocksResponse' => 'App\\IaaI\\GetIBuyFastStocksResponse',
        //'GetUtcAuctionDateByBranch' => 'App\\IaaI\\GetUtcAuctionDateByBranch',
        //'GetUtcAuctionDateByBranchResponse' => 'App\\IaaI\\GetUtcAuctionDateByBranchResponse',
        //'GetCurrentStockStatus' => 'App\\IaaI\\GetCurrentStockStatus',
        //'GetCurrentStockStatusResponse' => 'App\\IaaI\\GetCurrentStockStatusResponse',
    ]
]);

$loginResponse = $service->Login(
    new \MSBios\IaaI\Login('CAR.UK1211', 'JRLAKE5672')
);

var_dump($loginResponse);

/** @var null $sessionID */
$sessionID = null;

//if (!isset($container['sessionID'])) {
//
//    /** @var \Car\IaaI\Gateway\LoginResponse $loginResponse */
//    $loginResponse = $service->Login(
//        new \Car\IaaI\Gateway\Login("CAR.UK1211", "JRLAKE5672")
//    );
//
//    $container['sessionID'] = $loginResponse->getLoginResult();
//
//    /** @var string $sessionID */
//    $sessionID = $loginResponse->getLoginResult();
//
//}
//
///** @var array $regions */
//$regions = ['NY'];
//
//foreach ($regions as $region) {
//
//    /** @var \Car\IaaI\Gateway\GetBranchListResponse $branchListResponse */
//    $branchListResponse = $service->GetBranchList(
//        new \Car\IaaI\Gateway\GetBranchList($sessionID, $region)
//    );
//
//    /** @var int $branchCode */
//    foreach ($branchListResponse->getGetBranchListResult() as $branchCode) {
//
//        /** @var \Car\IaaI\Gateway\GetBranchInfoResponse $branchInfoResponse */
//        $branchInfoResponse = $service->GetBranchInfo(
//            new \Car\IaaI\Gateway\GetBranchInfo($sessionID, $branchCode)
//        );
//
//        echo "GetBranchInfo\n";
//        r($branchInfoResponse->getGetBranchInfoResult());
//
//        /** @var \Car\IaaI\Gateway\GetAuctionDateListByBranchResponse $auctionDateListByBranchResponse */
//        $auctionDateListByBranchResponse = $service->GetAuctionDateListByBranch(
//            new \Car\IaaI\Gateway\GetAuctionDateListByBranch($sessionID, $branchCode)
//        );
//
//        echo "GetAuctionDateListByBranch\n";
//        r($auctionDateListByBranchResponse->getGetAuctionDateListByBranchResult());
//
//        /** @var \Car\IaaI\Gateway\GetStockListByAuctionDateByBranchResponse $stockListByAuctionDateByBranchResponse */
//        $stockListByAuctionDateByBranchResponse = $service
//            ->GetStockListByAuctionDateByBranch(new \Car\IaaI\Gateway\GetStockListByAuctionDateByBranch(
//                $sessionID, $branchCode, (new DateTime)->add(new DateInterval('P1D'))
//            ));
//
//        /** @var \Car\IaaI\Gateway\ArrayOfstring $stockListByAuctionDateByBranchResult */
//        $stockListByAuctionDateByBranchResult = $stockListByAuctionDateByBranchResponse->getGetStockListByAuctionDateByBranchResult();
//
//        echo "getGetStockListByAuctionDateByBranchResult\n";
//        r($stockListByAuctionDateByBranchResult);
//
//        /** @var string $stockNumber */
//        foreach ($stockListByAuctionDateByBranchResult as $stockNumber) {
//
//            /** @var \Car\IaaI\Gateway\GetStockInfoResponse $stockInfoResponse */
//            $stockInfoResponse = $service->GetStockInfo(
//                new \Car\IaaI\Gateway\GetStockInfo($sessionID, $stockNumber, $branchCode)
//            );
//
//            r($stockInfoResponse->getGetStockInfoResult());
//            die;
//        }
//
//    }
//
//}
