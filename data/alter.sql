SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";

CREATE TABLE `stocks` (
  `ItemID` int(100) NOT NULL,
  `BranchName` varchar(200) DEFAULT NULL,
  `StockNumber` int(100) DEFAULT NULL,
  `branchcode` int(100) DEFAULT NULL,
  `branchphone` int(100) DEFAULT NULL,
  `AddressofStock` text,
  `LiveAuctionDate` datetime DEFAULT NULL,
  `OnlineBiddingClose` datetime DEFAULT NULL,
  `Timezone` varchar(100) DEFAULT NULL,
  `AuctionType` varchar(100) DEFAULT NULL,
  `IBidAuction` int(1) DEFAULT NULL,
  `PublicAuction` int(1) DEFAULT NULL,
  `WhoCanBuy` varchar(200) DEFAULT NULL,
  `LossType` varchar(200) DEFAULT NULL,
  `Start` varchar(200) DEFAULT NULL,
  `PrimaryDamage` varchar(200) DEFAULT NULL,
  `SecondaryDamage` varchar(200) DEFAULT NULL,
  `VehicleStatus` varchar(200) DEFAULT NULL,
  `Make` varchar(200) DEFAULT NULL,
  `Model` varchar(200) DEFAULT NULL,
  `Year` year(4) DEFAULT NULL,
  `Key` varchar(200) DEFAULT NULL,
  `CertState` varchar(200) DEFAULT NULL,
  `Odometer` int(7) DEFAULT NULL,
  `SaleDocument` varchar(200) DEFAULT NULL,
  `OdomStatus` varchar(200) DEFAULT NULL,
  `SaleDocumentBrand` varchar(200) DEFAULT NULL,
  `Vin` text,
  `SaleDocumentNotes` varchar(200) DEFAULT NULL,
  `RunAndDrive` varchar(200) DEFAULT NULL,
  `SalvageType` varchar(200) DEFAULT NULL,
  `ShrinkWrap` varchar(200) DEFAULT NULL,
  `AuctionID` int(100) DEFAULT NULL,
  `UtcLiveDate` datetime DEFAULT NULL,
  `UtcCloseDate` datetime DEFAULT NULL,
  `AdditionalVehicleInformation` text,
  `ImageURL` text,
  `ImageURLThumbNail` text,
  `ItemNumber` int(100) DEFAULT NULL,
  `AuctionLane` varchar(200) DEFAULT NULL,
  `SpecialNotes` varchar(200) DEFAULT NULL,
  `Seller` varchar(200) DEFAULT NULL,
  `TimedAuction` varchar(200) DEFAULT NULL,
  `UtcTimedAuctionCloseDate` year(4) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;


ALTER TABLE `stocks`
  ADD PRIMARY KEY (`ItemID`);


ALTER TABLE `stocks`
  MODIFY `ItemID` int(100) NOT NULL AUTO_INCREMENT;
COMMIT;
