-- SGBD mysql 
CREATE DATABASE DRH;
use DRH;

-- table departement
CREATE TABLE departement(
	id  int auto_increment PRIMARY KEY,
	Nom_departement varchar(20),
	Reference varchar(10),
	Mot_de_passe varchar(10)
);

INSERT INTO departement VALUES (null,"Departement des Ressources Humaines","DRH","drhAdmin01");
INSERT INTO departement VALUES (null,"Departement des Logistiques et des Finances","DLF","dlfAdmin02");
INSERT INTO departement VALUES (null,"Departement des Services Informatiques","DSI","dsiAdmin03");
INSERT INTO departement VALUES (null,"Departement des Services de Produiction","DSP","dspAdmin04");

-- table poste
CREATE TABLE posteDepartement(
	id int auto_increment PRIMARY KEY,
	idDept int,
	Poste varchar(50),
	FOREIGN KEY (idDept) REFERENCES departement(id)
);

INSERT INTO posteDepartement VALUES (null,1,'directeur');
INSERT INTO posteDepartement VALUES (null,1,'secretaire');
INSERT INTO posteDepartement VALUES (null,1,'sous-secretaire');
INSERT INTO posteDepartement VALUES (null,1,'chef services');

INSERT INTO posteDepartement VALUES (null,2,'directeur');
INSERT INTO posteDepartement VALUES (null,2,'secretaire');
INSERT INTO posteDepartement VALUES (null,2,'sous-secretaire');
INSERT INTO posteDepartement VALUES (null,2,'chef services');

INSERT INTO posteDepartement VALUES (null,3,'directeur');
INSERT INTO posteDepartement VALUES (null,3,'secretaire');
INSERT INTO posteDepartement VALUES (null,3,'sous-secretaire');
INSERT INTO posteDepartement VALUES (null,3,'chef services');

INSERT INTO posteDepartement VALUES (null,4,'directeur');
INSERT INTO posteDepartement VALUES (null,4,'secretaire');
INSERT INTO posteDepartement VALUES (null,4,'sous-secretaire');
INSERT INTO posteDepartement VALUES (null,4,'chef services');

-- table besoin
CREATE TABLE besoin(
	id int auto_increment PRIMARY KEY,
	poste int, 
	justificatif varchar(500),
	durer_estime date,
	diplom int,
	Experience int,
	FOREIGN KEY (poste) REFERENCES posteDepartement(id)
);

