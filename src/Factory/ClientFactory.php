<?php
/**
 * @access protected
 * @author Judzhin Miles <info[woof-woof]msbios.com>
 */
namespace MSBios\IaaI\Factory;

use Interop\Container\ContainerInterface;
use MSBios\IaaI\ClientInterface;
use MSBios\IaaI\GetAuctionDateListByBranch;
use MSBios\IaaI\GetAuctionDateListByBranchResponse;
use MSBios\IaaI\GetBranchInfo;
use MSBios\IaaI\GetBranchInfoResponse;
use MSBios\IaaI\GetBranchList;
use MSBios\IaaI\GetBranchListResponse;
use MSBios\IaaI\GetChangedStockListByAuctionDateByBranch;
use MSBios\IaaI\GetChangedStockListByAuctionDateByBranchResponse;
use MSBios\IaaI\GetchangedStockListbyLastAccess;
use MSBios\IaaI\GetchangedStockListbyLastAccessResponse;
use MSBios\IaaI\GetCurrentStockStatus;
use MSBios\IaaI\GetCurrentStockStatusResponse;
use MSBios\IaaI\GetIBuyFastStocks;
use MSBios\IaaI\GetIBuyFastStocksResponse;
use MSBios\IaaI\GetStockCurrentBid;
use MSBios\IaaI\GetStockCurrentBidResponse;
use MSBios\IaaI\GetStockInfo;
use MSBios\IaaI\GetStockInfoResponse;
use MSBios\IaaI\GetStockListByAuctionDateByBranch;
use MSBios\IaaI\GetStockListByAuctionDateByBranchResponse;
use MSBios\IaaI\GetStocksRecentBids;
use MSBios\IaaI\GetStocksRecentBidsResponse;
use MSBios\IaaI\GetUtcAuctionDateByBranch;
use MSBios\IaaI\GetUtcAuctionDateByBranchResponse;
use MSBios\IaaI\Login;
use MSBios\IaaI\LoginResponse;
use MSBios\IaaI\Module;
use Zend\ServiceManager\Factory\FactoryInterface;
use Zend\Soap\Client;

/**
 * Class ClientFactory
 * @package MSBios\IaaI\Factory
 */
class ClientFactory implements FactoryInterface
{
    /**
     * @inheritdoc
     *
     * @param ContainerInterface $container
     * @param string $requestedName
     * @param array|null $options
     * @return Client|ClientInterface
     */
    public function __invoke(ContainerInterface $container, $requestedName, array $options = null)
    {
        /** @var array $config */
        $config = $container->get(Module::class);

        return new class implements ClientInterface
        {

            /**
             * @param Login $login
             * @return LoginResponse
             */
            public function Login(Login $login): LoginResponse
            {
                return new LoginResponse(md5('SomeIdentityCode'));
            }

            /**
             * @param GetBranchList $parameters
             * @return GetBranchListResponse
             */
            public function GetBranchList(GetBranchList $parameters): GetBranchListResponse
            {
                return new GetBranchListResponse(['Some Branch']);
            }

            /**
             * @param GetBranchInfo $parameters
             * @return GetBranchInfoResponse
             */
            public function GetBranchInfo(GetBranchInfo $parameters): GetBranchInfoResponse
            {
                return new GetBranchInfoResponse('string');
            }

            /**
             * @param GetchangedStockListbyLastAccess $parameters
             * @return GetchangedStockListbyLastAccessResponse
             */
            public function GetchangedStockListbyLastAccess(GetchangedStockListbyLastAccess $parameters): GetchangedStockListbyLastAccessResponse
            {
                return new GetchangedStockListbyLastAccessResponse([]);
            }

            /**
             * @param GetStockInfo $parameters
             * @return GetStockInfoResponse
             */
            public function GetStockInfo(GetStockInfo $parameters): GetStockInfoResponse
            {
                return new GetStockInfoResponse(
<<<XML
<?xml version="1.0" encoding="utf-8"?>
<VehicleDetails> <BranchName>North Hollywood</BranchName>
 <StockNumber>25755444</StockNumber>
 <branchcode>111</branchcode>
 <branchphone>8184872222</branchphone>
 <AddressofStock>
 <Address>7245 LAUREL CANYON BLVD</Address>
 <City>LOS ANGELES</City>
 <State>CA</State>
 <Zip>91605</Zip>
 </AddressofStock>
 <LiveAuctionDate>8/7/2019 9:30:00 AM</LiveAuctionDate>
 <OnlineBiddingClose>8/7/2019 8:30:00 AM</OnlineBiddingClose>
 <Timezone>PT</Timezone>
 <AuctionType>Open</AuctionType>
 <IBidAuction>true</IBidAuction>
 <PublicAuction>true</PublicAuction>
 <WhoCanBuy>Dealer;Dismantler;Exporter;Other Licensed Business;Rebuilder;Scrapper</WhoCanBuy>
 <LossType>COLLISION</LossType>
 <Start>VEHICLE STARTS</Start>
 <PrimaryDamage>REAR</PrimaryDamage>
 <SecondaryDamage>SUSPENSION</SecondaryDamage>
 <VehicleStatus>READY FOR SALE</VehicleStatus>
 <Make>NISSAN</Make>
 <Model>ALTIMA</Model>
 <Year>2013</Year>
 <Key>PRESENT</Key>
 <CertState>California</CertState>
 <Odometer>145631</Odometer>
 <SaleDocument>SALVAGE CERTIFICATE</SaleDocument>
 <OdomStatus>NOT REQUIRED/EXEMPT</OdomStatus>
 <SaleDocumentBrand></SaleDocumentBrand>
 <Vin ID="1N4BL24E48C163798">
 <Year>2013</Year>
 <Make>NISSAN</Make>
 <Model>ALTIMA</Model>
 <Body>Coupe 2 Door</Body>
 <Engine>3.5L V6 FI DOHC 24V NF4</Engine>
 <Country>US</Country>
 <CheckDigit></CheckDigit>
 <DriveLineType>FWD</DriveLineType>
 <VehicleType>Passenger Car</VehicleType>
 <VehicleClass>2-door Mid-Size Passenger Car</VehicleClass>
 <FuelType>Gasoline</FuelType>
 <Series>3.5SE</Series>
 <RestraintSystem>Du Frnt/sd/hd Air Bgs/rr Hd Ar Bgs/act Belts</RestraintSystem>
 <Cylinder>6 Cyl</Cylinder>
 <Transmission>Automatic</Transmission>
 </Vin>
 <SaleDocumentNotes></SaleDocumentNotes>
 <RunAndDrive>YES</RunAndDrive>
 <SalvageType>Automobile</SalvageType>
 <ShrinkWrap>No</ShrinkWrap>
 <ItemID>32973058</ItemID>
 <AuctionID>30948031</AuctionID>
 <UtcLiveDate>8/7/2019 4:30:00 PM</UtcLiveDate>
 <UtcCloseDate>8/7/2019 3:30:00 PM</UtcCloseDate>
 <AdditionalVehicleInformation>
 <Name>ACV</Name>
 <Value>6311</Value>
 </AdditionalVehicleInformation>
 <AdditionalVehicleInformation>
 <Name>VIN Status</Name>
 <Value>OK</Value>
 </AdditionalVehicleInformation>
 <AdditionalVehicleInformation>
 <Name>Body Style</Name>
 <Value>COUPE 2 DOOR</Value>
 </AdditionalVehicleInformation>
 <AdditionalVehicleInformation>
 <Name>Color</Name>
 <Value>BLACK</Value>
 </AdditionalVehicleInformation>
 <AdditionalVehicleInformation>
 <Name>Radio</Name>
 <Value>PRESENT</Value>
 </AdditionalVehicleInformation>
 <AdditionalVehicleInformation>
 <Name>Driver Airbag</Name>
 <Value>DEPLOYED</Value>
 </AdditionalVehicleInformation>
 <AdditionalVehicleInformation>
 <Name>Interior Color</Name>
 <Value>BLACK</Value>
 </AdditionalVehicleInformation>
 <AdditionalVehicleInformation>
 <Name>Navigation</Name>
 <Value>N/A</Value>
 </AdditionalVehicleInformation>
 <AdditionalVehicleInformation>
 <Name>Airbag</Name>
 <Value>DEPLOYED</Value>
 </AdditionalVehicleInformation>
 <AdditionalVehicleInformation>
 <Name>Air Bags</Name>
 <Value>1</Value>
 </AdditionalVehicleInformation>
 <AdditionalVehicleInformation>
 <Name>Engine Size</Name>
 <Value>3.5L V6 FI DOHC 24V NF4</Value>
 </AdditionalVehicleInformation>
 <AdditionalVehicleInformation>
 <Name>KeyFob</Name>
 <Value>PRESENT</Value>
 </AdditionalVehicleInformation>
 <AdditionalVehicleInformation>
 <Name>Rear Entertainment</Name>
 <Value>N/A</Value>
 </AdditionalVehicleInformation>
 <AdditionalVehicleInformation>
 <Name>Stored</Name>
 <Value>Offsite</Value>
 </AdditionalVehicleInformation>
 <ImageURL>https://cvis.iaai.com/resizer?imageKeys=26177182~SID~I1&amp;width=640&amp;height=480</ImageURL>
 <ImageURLThumbNail>https://cvis.iaai.com/thumbnail?imageKeys=26177182~SID~I1</ImageURLThumbNail>
 <ImageURL>https://cvis.iaai.com/resizer?imageKeys=26177182~SID~I2&amp;width=640&amp;height=480</ImageURL>
 <ImageURLThumbNail>https://cvis.iaai.com/thumbnail?imageKeys=26177182~SID~I2</ImageURLThumbNail>
 <ImageURL>https://cvis.iaai.com/resizer?imageKeys=26177182~SID~I3&amp;width=640&amp;height=480</ImageURL>
 <ImageURLThumbNail>https://cvis.iaai.com/thumbnail?imageKeys=26177182~SID~I3</ImageURLThumbNail>
 <ImageURL>https://cvis.iaai.com/resizer?imageKeys=26177182~SID~I4&amp;width=640&amp;height=480</ImageURL>
 <ImageURLThumbNail>https://cvis.iaai.com/thumbnail?imageKeys=26177182~SID~I4</ImageURLThumbNail>
 <ImageURL>https://cvis.iaai.com/resizer?imageKeys=26177182~SID~I5&amp;width=640&amp;height=480</ImageURL>
 <ImageURLThumbNail>https://cvis.iaai.com/thumbnail?imageKeys=26177182~SID~I5</ImageURLThumbNail>
 <ImageURL>https://cvis.iaai.com/resizer?imageKeys=26177182~SID~I6&amp;width=640&amp;height=480</ImageURL>
 <ImageURLThumbNail>https://cvis.iaai.com/thumbnail?imageKeys=26177182~SID~I6</ImageURLThumbNail>
 <ImageURL>https://cvis.iaai.com/resizer?imageKeys=26177182~SID~I7&amp;width=640&amp;height=480</ImageURL>
 <ImageURLThumbNail>https://cvis.iaai.com/thumbnail?imageKeys=26177182~SID~I7</ImageURLThumbNail>
 <ImageURL>https://cvis.iaai.com/resizer?imageKeys=26177182~SID~I8&amp;width=640&amp;height=480</ImageURL>
 <ImageURLThumbNail>https://cvis.iaai.com/thumbnail?imageKeys=26177182~SID~I8</ImageURLThumbNail>
 <ImageURL>https://cvis.iaai.com/resizer?imageKeys=26177182~SID~I9&amp;width=640&amp;height=480</ImageURL>
 <ImageURLThumbNail>https://cvis.iaai.com/thumbnail?imageKeys=26177182~SID~I9</ImageURLThumbNail>
 <ImageURL>https://cvis.iaai.com/resizer?imageKeys=26177182~SID~I10&amp;width=640&amp;height=480</ImageURL>
 <ImageURLThumbNail>https://cvis.iaai.com/thumbnail?imageKeys=26177182~SID~I10</ImageURLThumbNail>
 <ItemNumber>138</ItemNumber>
 <AuctionLane>B</AuctionLane>
 <SpecialNotes></SpecialNotes>
 <Seller></Seller>
 <TimedAuction>false</TimedAuction>
 <UtcTimedAuctionCloseDate>12/31/1899</UtcTimedAuctionCloseDate>
 </VehicleDetails>
XML
                );
            }

            /**
             * @param GetStockCurrentBid $parameters
             * @return GetStockCurrentBidResponse
             */
            public function GetStockCurrentBid(GetStockCurrentBid $parameters): GetStockCurrentBidResponse
            {
                // TODO: Implement GetStockCurrentBid() method.
            }

            /**
             * @param GetAuctionDateListByBranch $parameters
             * @return GetAuctionDateListByBranchResponse
             */
            public function GetAuctionDateListByBranch(GetAuctionDateListByBranch $parameters): GetAuctionDateListByBranchResponse
            {
                // TODO: Implement GetAuctionDateListByBranch() method.
            }

            /**
             * @param GetStockListByAuctionDateByBranch $parameters
             * @return GetStockListByAuctionDateByBranchResponse
             */
            public function GetStockListByAuctionDateByBranch(GetStockListByAuctionDateByBranch $parameters): GetStockListByAuctionDateByBranchResponse
            {
                return new GetStockListByAuctionDateByBranchResponse(['string']);
            }

            /**
             * @param GetChangedStockListByAuctionDateByBranch $parameters
             * @return GetChangedStockListByAuctionDateByBranchResponse
             */
            public function GetChangedStockListByAuctionDateByBranch(GetChangedStockListByAuctionDateByBranch $parameters): GetChangedStockListByAuctionDateByBranchResponse
            {
                // TODO: Implement GetChangedStockListByAuctionDateByBranch() method.
            }

            /**
             * @param GetStocksRecentBids $parameters
             * @return GetStocksRecentBidsResponse
             */
            public function GetStocksRecentBids(GetStocksRecentBids $parameters): GetStocksRecentBidsResponse
            {
                // TODO: Implement GetStocksRecentBids() method.
            }

            /**
             * @param GetIBuyFastStocks $parameters
             * @return GetIBuyFastStocksResponse
             */
            public function GetIBuyFastStocks(GetIBuyFastStocks $parameters): GetIBuyFastStocksResponse
            {
                // TODO: Implement GetIBuyFastStocks() method.
            }

            /**
             * @param GetUtcAuctionDateByBranch $parameters
             * @return GetUtcAuctionDateByBranchResponse
             */
            public function GetUtcAuctionDateByBranch(GetUtcAuctionDateByBranch $parameters): GetUtcAuctionDateByBranchResponse
            {
                // TODO: Implement GetUtcAuctionDateByBranch() method.
            }

            /**
             * @param GetCurrentStockStatus $parameters
             * @return GetCurrentStockStatusResponse
             */
            public function GetCurrentStockStatus(GetCurrentStockStatus $parameters): GetCurrentStockStatusResponse
            {
                // TODO: Implement GetCurrentStockStatus() method.
            }
        };

        return new Client($config['wsdl'], $config['options']);
    }
}