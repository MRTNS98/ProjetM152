#------------------------------------------------------------
#        Script MySQL.
#------------------------------------------------------------


#------------------------------------------------------------
# Table: Categories
#------------------------------------------------------------

CREATE TABLE Categories(
        idCategorie  int (11) Auto_increment  NOT NULL ,
        nomCategorie Varchar (10) NOT NULL ,
        PRIMARY KEY (idCategorie )
)ENGINE=InnoDB;


#------------------------------------------------------------
# Table: Contenu
#------------------------------------------------------------

CREATE TABLE Contenu(
        idContenu   int (11) Auto_increment  NOT NULL ,
        Titre       Varchar (144) NOT NULL ,
        lienContenu Varchar (255) NOT NULL ,
        Auteur      Varchar (40) ,
        idCategorie Int NOT NULL ,
        idSection   Int NOT NULL ,
        PRIMARY KEY (idContenu )
)ENGINE=InnoDB;


#------------------------------------------------------------
# Table: Section
#------------------------------------------------------------

CREATE TABLE Section(
        idSection  int (11) Auto_increment  NOT NULL ,
        NomSection int (11) Auto_increment  NOT NULL ,
        PRIMARY KEY (idSection )
)ENGINE=InnoDB;

ALTER TABLE Contenu ADD CONSTRAINT FK_Contenu_idCategorie FOREIGN KEY (idCategorie) REFERENCES Categories(idCategorie);
ALTER TABLE Contenu ADD CONSTRAINT FK_Contenu_idSection FOREIGN KEY (idSection) REFERENCES Section(idSection);
