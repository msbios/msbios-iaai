<?php
/**
 * @access protected
 * @author Judzhin Miles <info[woof-woof]msbios.com>
 */

namespace MSBios\IaaI;

use Zend\Db\Adapter\AdapterInterface;
use Zend\Db\Adapter\AdapterServiceFactory;
use Zend\Mvc\Controller\LazyControllerAbstractFactory;
use Zend\ServiceManager\Factory\InvokableFactory;

return [

    'db' => [
        'driver' => 'Pdo',
        'dsn' => 'mysql:dbname=;host=',
        'username' => null,
        'password' => null,
        'driver_options' => [
            \PDO::MYSQL_ATTR_INIT_COMMAND => 'SET NAMES \'UTF8\''
        ],
    ],

    'service_manager' => [
        'factories' => [
            AdapterInterface::class =>
                AdapterServiceFactory::class,

            ClientInterface::class =>
                Factory\ClientFactory::class,
            Login::class =>
                Factory\LoginFactory::class,
            LoginResponse::class =>
                Factory\LoginResponseFactory::class,

            StockInfo\Parser::class =>
                InvokableFactory::class,

            StockInfo\Updater::class =>
                LazyControllerAbstractFactory::class,
        ],
    ],

    'controllers' => [
        'factories' => [
            Controller\StockInfoController::class =>
                LazyControllerAbstractFactory::class
        ]
    ],

    'console' => [
        'router' => [
            'routes' => [
                'cli.stock' => [
                    'type' => 'simple',
                    'options' => [
                        'route' => 'stock',
                        'defaults' => [
                            'controller' => Controller\StockInfoController::class,
                            'action' => 'synch',
                        ],
                    ],
                ],
            ],
        ],
    ],

    Module::class => [

        /**
         *
         */
        'username' => '',

        /**
         *
         */
        'password' => '',

        /**
         *
         */
        'wsdl' => '',

        /**
         *
         */
        'options' => [
            'soap_version' => SOAP_1_1,
            'classmap' => [
                'ArrayOfint' => ArrayOfint::class,
                'ArrayOfstring' => ArrayOfstring::class,
                'InvalidOperationException' => InvalidOperationException::class,
                'SystemException' => SystemException::class,
                'Exception' => Exception::class,
                'Login' => Login::class,
                'LoginResponse' => LoginResponse::class,
                'GetBranchList' => GetBranchList::class,
                'GetBranchListResponse' => GetBranchListResponse::class,
                'GetBranchInfo' => GetBranchInfo::class,
                'GetBranchInfoResponse' => GetBranchInfoResponse::class,
                'GetchangedStockListbyLastAccess' => GetchangedStockListbyLastAccess::class,
                'GetchangedStockListbyLastAccessResponse' => GetchangedStockListbyLastAccessResponse::class,
                'GetStockInfo' => GetStockInfo::class,
                'GetStockInfoResponse' => GetStockInfoResponse::class,
                'GetAuctionDateListByBranch' => GetAuctionDateListByBranch::class,
                'GetAuctionDateListByBranchResponse' => GetAuctionDateListByBranchResponse::class,
                'GetStockListByAuctionDateByBranch' => GetStockListByAuctionDateByBranch::class,
                'GetStockListByAuctionDateByBranchResponse' => GetStockListByAuctionDateByBranchResponse::class,
                'GetStocksRecentBids' => GetStocksRecentBids::class,
                'GetStocksRecentBidsResponse' => GetStocksRecentBidsResponse::class,
                'GetStockCurrentBid' => GetStockCurrentBid::class,
                'GetStockCurrentBidResponse' => GetStockCurrentBidResponse::class,
                'GetChangedStockListByAuctionDateByBranch' => GetChangedStockListByAuctionDateByBranch::class,
                'GetChangedStockListByAuctionDateByBranchResponse' => GetChangedStockListByAuctionDateByBranchResponse::class,
                'GetIBuyFastStocks' => GetIBuyFastStocks::class,
                'GetIBuyFastStocksResponse' => GetIBuyFastStocksResponse::class,
                'GetUtcAuctionDateByBranch' => GetUtcAuctionDateByBranch::class,
                'GetUtcAuctionDateByBranchResponse' => GetUtcAuctionDateByBranchResponse::class,
                'GetCurrentStockStatus' => GetCurrentStockStatus::class,
                'GetCurrentStockStatusResponse' => GetCurrentStockStatusResponse::class,
            ]
        ]
    ]
];
