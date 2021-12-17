CREATE DATABASE TugasAkhirBasdat;

CREATE TABLE Pet(
    Pet_ID Serial PRIMARY KEY,
    Owner_Name varchar(100) NOT NULL,
    Owner_TelpNumber bigint NOT NULL,
    Owner_Address varchar(200) NOT NULL,
    Pet_Name varchar(100) NOT NULL,
    Breed varchar(100) NOT NULL,
    Gender char NOT NULL,
    Age int NOT NULL
);

CREATE TABLE Adopter(
	Adopter_ID serial PRIMARY KEY,
	Name varchar(100) NOT NULL,
	TelpNumber bigint NOT NULL,
	Address varchar(200) NOT NULL
);

CREATE TABLE Certificate(
    Certificate_ID serial PRIMARY KEY,
    Pet_ID bigint NOT NULL,
    Adopter_ID bigint NOT NULL,
    CONSTRAINT Certificate_Pet_ID_FK FOREIGN KEY(Pet_ID) REFERENCES Pet(Pet_ID),
    CONSTRAINT Certificate_Adopter_ID_FK FOREIGN KEY(Adopter_ID) REFERENCES Adopter(Adopter_ID)
);

CREATE TABLE History(
    History_ID serial PRIMARY KEY,
	Certificate_ID bigint NOT NULL,
	Pet_Name varchar(100) NOT NULL,
	Breed varchar(100) NOT NULL,
	Gender char NOT NULL,
	Age int NOT NULL,
	Timestamps DATE NOT NULL DEFAULT CURRENT_DATE,
	CONSTRAINT History_Certificate_ID_FK FOREIGN KEY(Certificate_ID) REFERENCES Certificate(Certificate_ID)
);