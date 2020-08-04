/*CREATE DATABASE qv_calculator;*/

CREATE TABLE student (
	student_id int PRIMARY KEY,
	wunschnote DOUBLE NOT NULL,
	benötigtenote DOUBLE NOT NULL
);

CREATE TABLE ipa (
	ipa_id BIGINT NOT NULL AUTO_INCREMENT PRIMARY KEY,
	note double
);

CREATE TABLE semester (
semester_id BIGINT AUTO_INCREMENT PRIMARY KEY NOT NULL,
abu double,
erwgrundkompetenzen double
);

CREATE TABLE modul (
    modul_id BIGINT AUTO_INCREMENT PRIMARY KEY NOT NULL,
	modulname int NOT NULL,
	note double
);

CREATE TABLE UEK (
    UEK_id BIGINT AUTO_INCREMENT PRIMARY KEY NOT NULL,
	UEKname int NOT NULL,
	note double
);

CREATE TABLE eGK (
    eGK_id BIGINT AUTO_INCREMENT PRIMARY KEY NOT NULL,
	semester int NOT NULL,
	englischnote double,
    naturwissenschaftnote double,
    mathenote double
);

CREATE TABLE informatikkompetenz (
    informatikkompetenz_id BIGINT AUTO_INCREMENT PRIMARY KEY NOT NULL,
	id_modul BIGINT NOT NULL,
	id_UEK BIGINT NOT NULL,
    CONSTRAINT `id_informatikkompetenz_id_modul` FOREIGN KEY (id_modul) REFERENCES modul(modul_id),
    CONSTRAINT `id_informatikkompetenz_id_UEK` FOREIGN KEY (id_UEK) REFERENCES  UEK(UEK_id)
);

/*
PK = <tablename>_id BIGINT AUTO_INCREMENT NOT NULL
FK = id_<namederreferenztabelle> BIGINT UNSIGNED NOT NULL
FK_Zusatz = CONSTRAINT fk_<tabelle>_<namedesfks> FOREIGN KEY (<namedesfks>) REFERENCES <namederreferenztabelle> (<pkey von referenz)

*/