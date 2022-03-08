#------------------------------------------------------------
#        Script MySQL.
#------------------------------------------------------------


#------------------------------------------------------------
# Table: Utilisateurs
#------------------------------------------------------------

CREATE TABLE Utilisateurs(
        idUtilisateur Int  Auto_increment  NOT NULL ,
        pseudo        Varchar (50) NOT NULL ,
        mail          Varchar (50) NOT NULL ,
        motdepasse    Varchar (50) NOT NULL
	,CONSTRAINT Utilisateurs_PK PRIMARY KEY (idUtilisateur)
)ENGINE=InnoDB;


#------------------------------------------------------------
# Table: Quizz
#------------------------------------------------------------

CREATE TABLE Quizz(
        idQuizz  Int  Auto_increment  NOT NULL ,
        nomQuizz Varchar (50) NOT NULL ,
        reponse  Varchar (50) NOT NULL
	,CONSTRAINT Quizz_PK PRIMARY KEY (idQuizz)
)ENGINE=InnoDB;


#------------------------------------------------------------
# Table: Merveilles
#------------------------------------------------------------

CREATE TABLE Merveilles(
        idMerveille  Int  Auto_increment  NOT NULL ,
        nomMerveille Varchar (50) NOT NULL ,
        idQuizz      Int NOT NULL
	,CONSTRAINT Merveilles_PK PRIMARY KEY (idMerveille)

	,CONSTRAINT Merveilles_Quizz_FK FOREIGN KEY (idQuizz) REFERENCES Quizz(idQuizz)
)ENGINE=InnoDB;


#------------------------------------------------------------
# Table: Succes
#------------------------------------------------------------

CREATE TABLE Succes(
        idSucces    Int  Auto_increment  NOT NULL ,
        nomSucces   Varchar (50) NOT NULL ,
        photoSucces Varchar (50) NOT NULL
	,CONSTRAINT Succes_PK PRIMARY KEY (idSucces)
)ENGINE=InnoDB;


#------------------------------------------------------------
# Table: debloque
#------------------------------------------------------------

CREATE TABLE debloque(
        idMerveille    Int NOT NULL ,
        idUtilisateur  Int NOT NULL ,
        progression    Int NOT NULL ,
        recommandation Int NOT NULL
	,CONSTRAINT debloque_PK PRIMARY KEY (idMerveille,idUtilisateur)

	,CONSTRAINT debloque_Merveilles_FK FOREIGN KEY (idMerveille) REFERENCES Merveilles(idMerveille)
	,CONSTRAINT debloque_Utilisateurs0_FK FOREIGN KEY (idUtilisateur) REFERENCES Utilisateurs(idUtilisateur)
)ENGINE=InnoDB;


#------------------------------------------------------------
# Table: participe
#------------------------------------------------------------

CREATE TABLE participe(
        idQuizz       Int NOT NULL ,
        idUtilisateur Int NOT NULL ,
        reponseUser   Varchar (50) NOT NULL
	,CONSTRAINT participe_PK PRIMARY KEY (idQuizz,idUtilisateur)

	,CONSTRAINT participe_Quizz_FK FOREIGN KEY (idQuizz) REFERENCES Quizz(idQuizz)
	,CONSTRAINT participe_Utilisateurs0_FK FOREIGN KEY (idUtilisateur) REFERENCES Utilisateurs(idUtilisateur)
)ENGINE=InnoDB;


#------------------------------------------------------------
# Table: acquiert
#------------------------------------------------------------

CREATE TABLE acquiert(
        idSucces      Int NOT NULL ,
        idUtilisateur Int NOT NULL
	,CONSTRAINT acquiert_PK PRIMARY KEY (idSucces,idUtilisateur)

	,CONSTRAINT acquiert_Succes_FK FOREIGN KEY (idSucces) REFERENCES Succes(idSucces)
	,CONSTRAINT acquiert_Utilisateurs0_FK FOREIGN KEY (idUtilisateur) REFERENCES Utilisateurs(idUtilisateur)
)ENGINE=InnoDB;

