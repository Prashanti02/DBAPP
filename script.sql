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
  PRIMARY KEY (delegateID)
  );

CREATE TABLE dais
(
  daisID INT NOT NULL,
  dname VARCHAR(100) NOT NULL,
  committee VARCHAR(50) NOT NULL,
  position VARCHAR(50) NOT NULL,
  PRIMARY KEY (daisID)
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
  FOREIGN KEY (IDS) REFERENCES dais (daisID),
  FOREIGN KEY (IDS) REFERENCES delegates (delegateID),
  FOREIGN KEY (IDS) REFERENCES organizingcommittee(ID)
 );




INSERT INTO `delegates`(`delegateID`, `delName`, `committeeN`, `assignedCountry`) VALUES (2103,"Heather Mouuse","SOCHUM","USA");
INSERT INTO `delegates`(`delegateID`, `delName`, `committeeN`, `assignedCountry`) VALUES (2104,"Jason K","UNDP","Brazil");

INSERT INTO `dais`(`daisID`, `dName`, `committee`, `position`) VALUES (1105,"Richard Sean","SOCHUM","Chair");
INSERT INTO `dais`(`daisID`, `dName`, `committee`, `position`) VALUES (1106,"Samantha Paul","UNHCR", "Vice-chair");

INSERT INTO `organizingcommittee`(`ID`, `name`, `role`, `responsibility`) VALUES (4, "Luke M", "Deelgate Affairs", "Manage delegates");
INSERT INTO `organizingcommittee`(`ID`, `name`, `role`, `responsibility`) VALUES (5, "Logan H", "Delegate Affairs", "Awards");

INSERT INTO `pdetails`(`NO`, `Flight`, `Room`,  `Visareq`, `Country`, `IDS`) VALUES (2,"QR431","A235","Y", "Switzerland", 1105);
INSERT INTO `pdetails`(`NO`, `Flight`, `Room`, `Visareq`, `Country`  `IDS`) VALUES (3,"EI567","A437", "N", "Nepal", 1106);



