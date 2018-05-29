CREATE TABLE UTILISATEUR (
ID_Utilisateur serial,
Pseudo_Utilisateur varchar (32),
Email_Utilisateur varchar(50),
MDP_Utilisateur varchar(100),
CONSTRAINT pk_Utilisateur PRIMARY KEY (ID_Utilisateur)
);


CREATE TABLE SUJET (
ID_Sujet serial,
Nom_Sujet varchar(32) NOT NULL,
Description_Sujet varchar,
ID_Utilisateur int,
CONSTRAINT pk_Sujet PRIMARY KEY (ID_Sujet),
CONSTRAINT fk_Utilisateur_Sujet FOREIGN KEY (ID_Utilisateur) REFERENCES UTILISATEUR (ID_Utilisateur) 
);



CREATE TABLE COMMENTAIRE (
ID_Commentaire serial,
Contenu_Commentaire varchar,
Date_Commentaire Date,
ID_Utilisateur int,
ID_Sujet int,
CONSTRAINT pk_Commentaire PRIMARY KEY (ID_Commentaire, ID_Sujet),
CONSTRAINT fk_Utilisateur_Commentaire FOREIGN KEY (ID_Utilisateur) REFERENCES UTILISATEUR (ID_Utilisateur),
CONSTRAINT fk_Sujet_Commentaire FOREIGN KEY (ID_Sujet) REFERENCES SUJET (ID_Sujet) 
);




