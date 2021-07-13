CREATE TABLE organizingcommittee
(
  ID INT NOT NULL,
  Role VARCHAR(50) NOT NULL,
  Name VARCHAR(100) NOT NULL,
  PRIMARY KEY (ID)
);

CREATE TABLE delegates
(
  DelegateID INT NOT NULL,
  Committee VARCHAR(50) NOT NULL,
  DelName VARCHAR(100) NOT NULL,
  PRIMARY KEY (DelegateID)
);

CREATE TABLE pdetails
(
  Flight VARCHAR(50) NOT NULL,
  Room VARCHAR(20) NOT NULL,
  NO INT NOT NULL,
  IDS INT NOT NULL,
  PRIMARY KEY (NO)
);

CREATE TABLE dais
(
  DaisID INT NOT NULL,
  Committee VARCHAR(50) NOT NULL,
  Dname VARCHAR(100) NOT NULL,
  PRIMARY KEY (DaisID)
);




INSERT INTO `delegates`(`delegateID`, `delName`, `committee`) VALUES (2103,"Heather Mouuse","SOCHUM");
INSERT INTO `delegates`(`delegateID`, `delName`, `committee`) VALUES (2104,"Jason K","UNDP");

INSERT INTO `dais`(`daisID`, `dName`, `committee`) VALUES (1105,"Richard Sean","SOCHUM");
INSERT INTO `dais`(`daisID`, `dName`, `committee`) VALUES (1106,"Samantha Paul","UNHCR");

INSERT INTO `organizingcommittee`(`ID`, `name`, `role`) VALUES (4, "Luke M", "Deelgate Affairs");
INSERT INTO `organizingcommittee`(`ID`, `name`, `role`) VALUES (5, "Logan H", "Delegate Affairs");

INSERT INTO `pdetails`(`NO`, `Flight`, `Room`, `IDS`) VALUES (2,"QR431","A235","1102");
INSERT INTO `pdetails`(`NO`, `Flight`, `Room`,  `IDS`) VALUES (3,"EI567","A437", "1103");



