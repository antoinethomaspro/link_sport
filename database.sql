#------------------------------------------------------------
#        Script MySQL.
#------------------------------------------------------------


#------------------------------------------------------------
# Table: Users
#------------------------------------------------------------

CREATE TABLE Users(
        id_users    Int  Auto_increment  NOT NULL ,
        password    Varchar (50) NOT NULL ,
        mail        Varchar (50) NOT NULL ,
        first_name  Varchar (50) NOT NULL ,
        last_name   Varchar (50) NOT NULL ,
        num         Varchar (6) NOT NULL ,
        rue         Varchar (50) NOT NULL ,
        code_postal Varchar (50) NOT NULL ,
        ville       Varchar (50) NOT NULL ,
        phone       Int NOT NULL
	,CONSTRAINT Users_PK PRIMARY KEY (id_users)
)ENGINE=InnoDB;


#------------------------------------------------------------
# Table: Sport
#------------------------------------------------------------

CREATE TABLE Sport(
        id_sport Int  Auto_increment  NOT NULL ,
        name     Varchar (50) NOT NULL
	,CONSTRAINT Sport_PK PRIMARY KEY (id_sport)
)ENGINE=InnoDB;


#------------------------------------------------------------
# Table: Articles
#------------------------------------------------------------

CREATE TABLE Articles(
        id_articles Int  Auto_increment  NOT NULL ,
        name        Varchar (50) NOT NULL ,
        description Varchar (50) NOT NULL ,
        picture     Varchar (50) NOT NULL ,
        id_users    Int NOT NULL ,
        id_sport    Int
	,CONSTRAINT Articles_PK PRIMARY KEY (id_articles)

	,CONSTRAINT Articles_Users_FK FOREIGN KEY (id_users) REFERENCES Users(id_users)
	,CONSTRAINT Articles_Sport0_FK FOREIGN KEY (id_sport) REFERENCES Sport(id_sport)
)ENGINE=InnoDB;


#------------------------------------------------------------
# Table: Loan
#------------------------------------------------------------

CREATE TABLE Loan(
        id_articles    Int NOT NULL ,
        id_users       Int NOT NULL ,
        begin_date     Date NOT NULL ,
        end_date       Date NOT NULL ,
        advice_owner   Varchar (50) NOT NULL ,
        advice_loaner  Varchar (50) NOT NULL ,
        mark_owner     Int NOT NULL ,
        mark_loaner    Int NOT NULL ,
        status         Varchar (50) NOT NULL ,
        creation_date  Date NOT NULL ,
        loaner_comment Varchar (50) NOT NULL
	,CONSTRAINT Loan_PK PRIMARY KEY (id_articles,id_users)

	,CONSTRAINT Loan_Articles_FK FOREIGN KEY (id_articles) REFERENCES Articles(id_articles)
	,CONSTRAINT Loan_Users0_FK FOREIGN KEY (id_users) REFERENCES Users(id_users)
)ENGINE=InnoDB;

