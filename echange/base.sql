create database echange;
use echange;

create table utilisateur(
	idUtilisateur int not null primary key auto_increment,
	login varchar(50),
	motDePasse varchar(100)
);

create table categorie(
	idCategorie int not null primary key auto_increment,
	categorie varchar(20)
);

create table objet(
	idObjet int not null primary key auto_increment,
	titre varchar(100),
	couverture varchar(20),
	description varchar(1000),
	idCategorie int,
	prix int,
	idUtilisateur int,
	foreign key (idCategorie) references categorie(idCategorie),
	foreign key (idUtilisateur) references utilisateur(idUtilisateur)
);

create table demande(
	idDemande int not null primary key auto_increment,
	demandeur int, 
	idObjet int,
	proprietaire int,
	etat int,
	foreign key (idObjet) references objet(idObjet),
	foreign key (demandeur) references utilisateur(idUtilisateur),
	foreign key (proprietaire) references utilisateur(idUtilisateur)
);

create table echanger(
	idEchange int not null primary key auto_increment,
	objet1 int,
	demandeur int,
	objet2 int,
	proprietaire int,
	datyDemande datetime,
	etat int,
	datyEchange datetime,
	foreign key (objet1) references objet(idObjet),
	foreign key (objet2) references objet(idObjet),
	foreign key (demandeur) references utilisateur(idUtilisateur),
	foreign key (proprietaire) references utilisateur(idUtilisateur)
);

insert into utilisateur values(null,'Jean','123');
insert into utilisateur values(null,'Lucien','123');
insert into utilisateur values(null,'admin','132');

insert into categorie values(null,'Vêtement');
insert into categorie values(null,'Livre');
insert into categorie values(null,'Chaussure');
insert into categorie values(null,'Décoration');

insert into objet values(null,'Vans','1.jpg','Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Leo in vitae turpis massa sed elementum. Tellus at urna condimentum mattis pellentesque id nibh.',3,15000,1);
insert into objet values(null,'Vase céramique haha','2.jpg','Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Leo in vitae turpis massa sed elementum. Tellus at urna condimentum mattis pellentesque id nibh.',4,17000,2);
insert into objet values(null,'Vêtement coton','3.jpg','Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Leo in vitae turpis massa sed elementum. Tellus at urna condimentum mattis pellentesque id nibh.',1,19000,2);
insert into objet values(null,'Vase en bois','4.jpg','Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Leo in vitae turpis massa sed elementum. Tellus at urna condimentum mattis pellentesque id nibh.',4,20000,1);
insert into objet values(null,'Pôt de fleure','5.jpg','Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Leo in vitae turpis massa sed elementum. Tellus at urna condimentum mattis pellentesque id nibh.',4,15000,2);
insert into objet values(null,'Vase plastique','6.jpg','Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Leo in vitae turpis massa sed elementum. Tellus at urna condimentum mattis pellentesque id nibh.',4,16000,1);
insert into objet values(null,'Livre pour enfant','7.jpg','Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Leo in vitae turpis massa sed elementum. Tellus at urna condimentum mattis pellentesque id nibh.',2,18800,2);
insert into objet values(null,'Chaise en laine','8.jpg','Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Leo in vitae turpis massa sed elementum. Tellus at urna condimentum mattis pellentesque id nibh.',4,19800,1);
insert into objet values(null,'Décoration murale','9.jpg','Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Leo in vitae turpis massa sed elementum. Tellus at urna condimentum mattis pellentesque id nibh.',4,15500,2);

