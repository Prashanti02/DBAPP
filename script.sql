CREATE TABLE Organizing_committee
(
  ID INT NOT NULL,
  Role VARCHAR(50) NOT NULL,
  Name VARCHAR(100) NOT NULL,
  PRIMARY KEY (ID)
);

CREATE TABLE Delegates
(
  DelegateID INT NOT NULL,
  Assignedcountry VARCHAR(100) NOT NULL,
  CommitteeN VARCHAR(50) NOT NULL,
  Group VARCHAR(10),
  DelName VARCHAR(100) NOT NULL,
  PRIMARY KEY (DelegateID)
);

CREATE TABLE Pdetails
(
  Flight VARCHAR(50) NOT NULL,
  Room VARCHAR(20) NOT NULL,
  Country VARCHAR(100) NOT NULL,
  Visareq VARCHAR(20),
  NO INT NOT NULL,
  IDS INT NOT NULL,
  PRIMARY KEY (NO)
);

CREATE TABLE Dais_
(
  DaisID INT NOT NULL,
  Position VARCHAR(50) NOT NULL,
  Committee VARCHAR(50) NOT NULL,
  Dname VARCHAR(100) NOT NULL,
  PRIMARY KEY (DaisID)
);




INSERT INTO `delegates`(`delegateID`, `delName`, `committeeN`, `assignedCountry`, `group`) VALUES (2103,"Heather Mouuse","SOCHUM","USA","N")
INSERT INTO `delegates`(`delegateID`, `delName`, `committeeN`, `assignedCountry`, `group`) VALUES (2104,"Jason K","UNDP","Nepal","N")

INSERT INTO `dais`(`daisID`, `dName`, `committee`, `position`) VALUES (1105,"Richard Sean","SOCHUM","Vice-chair")
INSERT INTO `dais`(`daisID`, `dName`, `committee`, `position`) VALUES (1106,"Samantha Paul","UNHCR","Vice-chair")

INSERT INTO `organizingcommittee`(`ID`, `name`, `role`, `responsibility`) VALUES (4, "Luke M", "Deelgate Affairs", "Certificates management")
INSERT INTO `organizingcommittee`(`ID`, `name`, `role`, `responsibility`) VALUES (5, "Logan H", "Delegate Affairs", "Closing")

INSERT INTO `pdetails`(`NO`, `Flight`, `Room`, `Visareq`, `Country`, `IDS`) VALUES (2,"QR431","A235","Y","Germany","1102")
INSERT INTO `pdetails`(`NO`, `Flight`, `Room`, `Visareq`, `Country`, `IDS`) VALUES (3,"EI567","A437","Y","France","1103")



