CREATE TABLE User
    (UserID       VARCHAR(255)      NOT NULL,
     Name         VARCHAR(255)      NOT NULL,
     Phone_num    INT(10)           NULL,
     Address      VARCHAR(255)      NULL,
     Total_Rating INT(5)            DEFAULT '0',
     Num_Rating   INT(5)            DEFAULT '0',
     PRIMARY KEY (UserID))/

CREATE TABLE Account
    (UserID        VARCHAR(255)      NOT NULL,
     Password      VARCHAR(255)      NOT NULL,
     Forgetme      VARCHAR(255)      NULL,
     CreationDate  TIMESTAMP         NOT NULL,        
     PRIMARY KEY (UserID),
     FOREIGN KEY (UserID) REFERENCES User (UserID))/

CREATE TABLE Item
    (ItemID           INT(10)           NOT NULL,
     UserID           VARCHAR(255)      NULL,
     ListingPrice     FLOAT(10,2)       DEFAULT '0',
     ListingDate      TIMESTAMP         NULL,
     ItemDescription  varchar(255)      NULL, 
     Availability     INT(1)            DEFAULT '0',
     Quantity         INT(3)            DEFAULT '0',
     PRIMARY KEY (ItemID),
     FOREIGN KEY (UserID) REFERENCES User (UserID))/

CREATE TABLE Item_Purchases
    (ItemID           INT(10)           NOT NULL,
     UserID           VARCHAR(255)      NULL,
     PurchaseDate     TIMESTAMP         NULL,
     PurchasePrice    FLOAT(10,2)       DEFAULT '0',
     PRIMARY KEY (ItemID, UserID),
	 FOREIGN KEY (ItemID) REFERENCES Item (ItemID),
     FOREIGN KEY (UserID) REFERENCES User (UserID));


