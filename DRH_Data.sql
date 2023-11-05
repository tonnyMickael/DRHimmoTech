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

-- jointure dept_poste
CREATE VIEW dept_poste AS SELECT depart.id as idDepart, 
								 posteDepart.id as idPoste, 
								 Nom_departement, Reference, 
								 Poste 
						  FROM departement depart 
						  JOIN posteDepartement posteDepart 
						  ON depart.id = posteDepart.idDept; 

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
	datecreation date,
	diplom int,
	Experience int,
	competence varchar(500),
	mission varchar(500),
	FOREIGN KEY (dept) REFERENCES departement(id),
	FOREIGN KEY (poste) REFERENCES posteDepartement(id)
);

-- nettoyer une table 
DELETE FROM ma_table;
DELETE FROM ma_table WHERE colonne_x = 'valeur';

/*
	CREATE VIEW ma_vue AS
	SELECT table1.colonne1, table1.colonne2, table2.colonne3
	FROM table1
	INNER JOIN table2 ON table1.colonneX = table2.colonneY;

	CREATE VIEW ma_vue AS
	SELECT
    	t1.colonne1 AS colonne_table1,
    	t2.colonne1 AS colonne_table2,
    	t1.colonne2 AS colonne_table1_2,
    	t2.colonne2 AS colonne_table2_2
	FROM
    	table1 t1
	JOIN
    	table2 t2
	ON
    	t1.id = t2.id;
*/
-- jointure besoin_dept_poste
CREATE VIEW annonce_recrutement AS SELECT besoin.id,
										  dept_poste.Nom_departement, 
										  dept_poste.Poste, 
										  besoin.datecreation, 
										  besoin.date_fin_recrutement, 
										  besoin.date_limit_recrutement 
							       FROM besoin 
							       JOIN dept_poste 
							       ON (besoin.dept = dept_poste.idDepart AND besoin.poste = dept_poste.idPoste); 

CREATE VIEW detail_mission AS SELECT besoin.id,
									 dept_poste.Nom_departement,
									 dept_poste.Poste,
									 besoin.competence,
									 besoin.mission
							  FROM besoin
							  JOIN dept_poste
							  ON (besoin.dept = dept_poste.idDepart AND besoin.poste = dept_poste.idPoste);	

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

