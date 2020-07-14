CREATE DATABASE qv_calculator;

CREATE TABLE student (
	ID BIGINT NOT NULL AUTO_INCREMENT PRIMARY KEY,
	Firstname VARCHAR(32) NOT NULL,
	Lastname VARCHAR(32)  NOT NULL,
    email VARCHAR(64) NOT NULL,
	wunschnote DOUBLE NOT NULL
);

CREATE TABLE IPA (
	ID BIGINT NOT NULL AUTO_INCREMENT PRIMARY KEY,
	Note double
);

CREATE TABLE Semester (
ID BIGINT AUTO_INCREMENT PRIMARY KEY NOT NULL,
ABU double,
erwGrundKompetenzen double
);

CREATE TABLE Modul (
	ModulName int PRIMARY KEY,
	Note double
);

CREATE TABLE UEK (
	UEKName int PRIMARY KEY,
	Note double
);

CREATE TABLE eGK (
	Semester BIGINT NOT NULL AUTO_INCREMENT PRIMARY KEY,
	EnglischNote double,
    NaturWissenschaftNote double,
    MatheNote double
);

CREATE TABLE Informatikkompetenz (
	
)