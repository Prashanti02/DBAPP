CREATE TABLE organizingcommittee
(
  ID INT NOT NULL,
  name VARCHAR(50) NOT NULL,
  role VARCHAR(100) NOT NULL,
  responsibility VARCHAR(100) NOT NULL,
  PRIMARY KEY (ID)
);

CREATE TABLE delegates
(
  delegateID INT NOT NULL,
  delName VARCHAR(50) NOT NULL,
  committeeN VARCHAR(100) NOT NULL,
  assignedCountry VARCHAR(50) NOT NULL,
  ID INT NOT NULL,
  PRIMARY KEY (delegateID),
 FOREIGN KEY (ID) REFERENCES organizingcommittee (ID)
  );

CREATE TABLE dais
(
  daisID INT NOT NULL,
  dname VARCHAR(100) NOT NULL,
  committee VARCHAR(50) NOT NULL,
  position VARCHAR(50) NOT NULL,
  ID INT NOT NULL,
  PRIMARY KEY (daisID),
FOREIGN KEY (ID) REFERENCES organizingcommittee (ID)
);

CREATE TABLE pdetails
(
  NO INT NOT NULL,
  Flight VARCHAR(50) NOT NULL,
  Room VARCHAR(20) NOT NULL,
  Visareq VARCHAR(20) NOT NULL,
  Country VARCHAR(50) NOT NULL,
  IDS INT NOT NULL,
  PRIMARY KEY (NO),
FOREIGN KEY (IDS) REFERENCES delegates (delegateID)
);




INSERT INTO `delegates`(`delegateID`, `delName`, `committeeN`, `assignedCountry`, `ID`) VALUES (2103,"Heather Mouuse","SOCHUM","USA", 4);
INSERT INTO `delegates`(`delegateID`, `delName`, `committeeN`, `assignedCountry`, `ID`) VALUES (2104,"Jason K","UNDP","Brazil", 5);

INSERT INTO `dais`(`daisID`, `dName`, `committee`, `position`, `ID`) VALUES (1105,"Richard Sean","SOCHUM","Chair", 4);
INSERT INTO `dais`(`daisID`, `dName`, `committee`, `position`, `ID`) VALUES (1106,"Samantha Paul","UNHCR", "Vice-chair", 4);

INSERT INTO `organizingcommittee`(`ID`, `name`, `role`, `responsibility`) VALUES (4, "Luke M", "Deelgate Affairs", "Manage delegates");
INSERT INTO `organizingcommittee`(`ID`, `name`, `role`, `responsibility`) VALUES (5, "Logan H", "Delegate Affairs", "Awards");

INSERT INTO `pdetails`(`NO`, `Flight`, `Room`,  `Visareq`, `Country`, `IDS`) VALUES (1,"QR431","A235","Y", "Switzerland", 2103);
INSERT INTO `pdetails`(`NO`, `Flight`, `Room`,  `Visareq`, `Country`, `IDS`) VALUES (2,"QR431","A457","Y", "Germany", 2104);







