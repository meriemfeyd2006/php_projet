create database intern_management;
use intern_management;


CREATE TABLE stagiaires (
    id_stagiaires INT PRIMARY KEY,
    nom VARCHAR(100),
    prenom VARCHAR(100),
    cin VARCHAR(20),
    age INT,
    email VARCHAR(100),
    pwd VARCHAR(10),
    adress VARCHAR(255),
    tele VARCHAR(20)
);

insert into stagiaires(id_stagiaires,nom,prenom,cin,age,email,pwd,adress,tele)
values(1,'feyd','meriem','bk123456',18,'meriemfeyd@gmail.com','123meriem','casa',0698787418);
insert into stagiaires(id_stagiaires,nom,prenom,cin,age,email,pwd,adress,tele)
values(2,'elfakiri','mariam','BR377378',19,'meriemelfakiri@gmail.com','mariam123','rabat',0698765411);
insert into stagiaires(id_stagiaires,nom,prenom,cin,age,email,pwd,adress,tele)
values(3,'barada','maha','BH3774378',20,'mahabaradai@gmail.com','maha123','fes',0698987411);

select * from stagiaires;
CREATE TABLE offre (
    id_offre INT PRIMARY KEY,
    nom_entreprise VARCHAR(100),
    profil_rechercher VARCHAR(255),
    descriptif_mission TEXT
);




CREATE TABLE entreprise (
    id_entreprise INT PRIMARY KEY,
    nom_entreprise VARCHAR(100),
    email VARCHAR(100),
    tele VARCHAR(20),
    adress VARCHAR(255),
    id_offre INT,
    FOREIGN KEY (id_offre) REFERENCES offre(id_offre)
);




CREATE TABLE stagiaires_has_offre (
    id_offre INT,
    id_stagiaires INT,
    PRIMARY KEY (id_offre, id_stagiaires),
    FOREIGN KEY (id_offre) REFERENCES offre(id_offre),
    FOREIGN KEY (id_stagiaires) REFERENCES stagiaires(id_stagiaires)
);


