DROP DATABASE IF EXISTS magasin;

CREATE DATABASE magasin;

CREATE TABLE Client (
	cli_id 		INT NOT NULL AUTO_INCREMENT PRIMARY KEY ,
	cli_nom 	VARCHAR (50) NOT NULL,
	cli_adresse 	VARCHAR(50) NOT NULL,
   cli_tel      VARCHAR (50) NOT NULL,
);

CREATE TABLE Commande (
	com_num 		INT NOT NULL PRIMARY KEY AUTO_INCREMENT,
	cli_num 	INT,
	com_date 	DATETIME,
   com_obs         VARCHAR (50) NOT NULL,
   FOREIGN KEY (cli_num) REFERENCES Departements (cli_id),

);

CREATE DATABASE Produit (
    Pro_num          INT,
    Pro_libelle      VARCHAR (50) NOT NULL, 
    Pro_description  VARCHAR (50) NOT NULL,

);

CREATE DATABASE Est_compse (
    Com_num      INT, 
    Pro_num      INT, 
    Est_qte      INT, 
    FOREIGN KEY (Pro_num) REFERENCES Departements (Pro_num),

);

