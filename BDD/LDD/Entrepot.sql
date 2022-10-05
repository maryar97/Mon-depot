DROP DATABASE IF EXISTS entrepot;
CREATE DATABASE entrepot;
USE entrepot; 
CREATE TABLE client (
	cli_num 		INT NOT NULL PRIMARY KEY AUTO_INCREMENT,
	cli_nom 	VARCHAR(50) NOT NULL,
	cli_adresse 	VARCHAR(50),
    cli_tel      VARCHAR (50)
);

CREATE TABLE commande (
	com_num 		INT NOT NULL PRIMARY KEY AUTO_INCREMENT,
	cli_num 	INT NOT NULL, 
	com_date 	DATETIME,
   com_obs         VARCHAR (50),
   FOREIGN KEY (cli_num) REFERENCES client (cli_num)

);

CREATE TABLE produit (
    pro_num          INT NOT NULL PRIMARY KEY AUTO_INCREMENT,
    pro_libelle        VARCHAR (50), 
    pro_description     VARCHAR (50)

);

CREATE TABLE est_compose (
    com_num      INT NOT NULL, 
    pro_num      INT NOT NULL, 
    est_qte      INT NOT NULL,
    FOREIGN KEY (pro_num) REFERENCES produit (pro_num),
    FOREIGN KEY (com_num) REFERENCES commande (com_num),
    PRIMARY KEY (pro_num, com_num)
);

