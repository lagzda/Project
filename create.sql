CREATE DATABASE project;
USE project;

CREATE TABLE Majors
(
Name varchar(255) PRIMARY KEY
);

CREATE TABLE Modules
(
Name varchar(255) PRIMARY KEY,
Teacher varchar(255),
Classroom varchar(255),
Time varchar(255)
);

CREATE TABLE Modules_Majors
(
Mod_Name varchar(255),
Maj_name varchar(255),
CONSTRAINT fk_mod_name FOREIGN KEY (Mod_Name)
REFERENCES Modules(Name),
CONSTRAINT fk_maj_name FOREIGN KEY (Maj_Name)
REFERENCES Majors(Name)
);

INSERT INTO Majors VALUES ("Computing");

INSERT INTO Modules VALUES ("Java","Kevin Gong, Jason Lee, Cindy Chan","A202,C307,G408","Monday 12:00, Tuesday 14:00, Thursday 12:00");

INSERT INTO Modules_Majors VALUES ("Java","Computing");