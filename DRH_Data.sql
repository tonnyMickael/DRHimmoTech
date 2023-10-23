-- SGBD mysql 
CREATE DATABASE DRH;
use DRH;

-- table departement
CREATE TABLE departement(
	id  int auto_increment PRIMARY KEY,
	Nom_departement varchar(100),
	Reference varchar(10),
	Mot_de_passe varchar(10)
);

INSERT INTO departement VALUES (null,"Departement des Ressources Humaines","DRH","drhAdmin01");
INSERT INTO departement VALUES (null,"Departement des Logistiques et des Finances","DLF","dlfAdmin02");
INSERT INTO departement VALUES (null,"Departement des Services Informatiques","DSI","dsiAdmin03");
INSERT INTO departement VALUES (null,"Departement des Services de Production","DSP","dspAdmin04");

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
	dept int,
	poste int, 
	justificatif varchar(500),
	dateDebut date,
	dateFin date,
	date_fin_recrutement date,
	date_limit_recrutement date,
	diplom int,
	Experience int,
	competence varchar(500),
	FOREIGN KEY (dept) REFERENCES departement(id),
	FOREIGN KEY (poste) REFERENCES posteDepartement(id)
);

--  table critere
CREATE TABLE critere(
	id int auto_increment PRIMARY KEY,
	besoin int,
	genre int,
	langue int,
	niveau int,
	diplome int,
	experience int,
	FOREIGN KEY (besoin) REFERENCES besoin(id)
);

-- table annonce
CREATE TABLE annonce(
	id int auto_increment PRIMARY KEY,
	besoin int,
	datecreation date,
	FOREIGN KEY (besoin) REFERENCES besoin(id)
);

-- table Cv
CREATE TABLE cv(
	id int auto_increment PRIMARY KEY,
	Nom varchar(100),
	Prenom varchar(100),
	Adresse varchar(100),
	telephone int,
	photo_identiter varchar(100),
	objectifs varchar(500),
	exp_pro varchar(500),
	diplome int,
	dateObtention date,
	justificatif varchar(100),
	compte_pro varchar(500),
	langue int,
	niveau int,
	sport int,
	activite int
);

