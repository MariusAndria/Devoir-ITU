@@ -0,0 +1,66 @@
create table Gerant (
    idGerant integer not null auto_increment primary key,
    identifiant varchar(30),
    mdp varchar(100),
    primary key(idGerant)
)ENGINE=InnoDB;
insert into Gerant values (null,'admin1',sha1('admin'));
insert into Gerant values (null,'admin2',sha1('admin'));
create table Categorie (
    idCategorie integer not null auto_increment,
    nomCategorie varchar(30),
    primary key (idCategorie)
)ENGINE=InnoDB;
insert into Categorie values (null,'vetements');
insert into Categorie values (null,'fourniture scolaire');
insert into Categorie values (null,'chaussures');
insert into Categorie values (null,'techonologie');

create table Produit (
    idProduit integer not null auto_increment primary key,
    nomProduit varchar(70),
    idCategorie integer,
    saryProduit varchar(200),
    QteStock integer,
    prixUnitaire real,
    foreign key (idCategorie) references Categorie (idCategorie)
)ENGINE=InnoDB;
insert into Produit values(null,'teeshirt',1,'sary/teeshirt.png',15,10000);
insert into Produit values(null,'pantalon',1,'sary/pantalon.png',25,10000);
insert into Produit values(null,'short',1,'sary/short.png',35,1500);
insert into Produit values(null,'pull',1,'sary/pull.png',5,12000);
insert into Produit values(null,'blouson',1,'sary/blouson.png',10,13000);
insert into Produit values(null,'stylo',2,'',15,1000);
insert into Produit values(null,'regle',2,'',15,1000);
insert into Produit values(null,'compas',2,'',15,1000);
insert into Produit values(null,'feutre',2,'',15,1000);
insert into Produit values(null,'crayon',2,'',15,1000);
insert into Produit values(null,'nike',3,'',15,1000);
insert into Produit values(null,'adidas',3,'',15,1000);
insert into Produit values(null,'puma',3,'',15,1000);
insert into Produit values(null,'reebok',3,'',15,1000);
insert into Produit values(null,'yeezy',3,'',15,1000);
insert into Produit values(null,'smartphone',4,'',15,1000);
insert into Produit values(null,'tablette',4,'',15,1000);
insert into Produit values(null,'laptop',4,'',15,1000);
insert into Produit values(null,'earpod',4,'',15,1000);
insert into Produit values(null,'montre',4,'',15,1000);

create table Caisse(
    idCaisse integer not null auto_increment,
    nomCaisse varchar(30),
    primary key (idCaisse)
)ENGINE=InnoDB;
insert into Caisse values(null,'caisse 1');
insert into Caisse values(null,'caisse 2');
insert into Caisse values(null,'caisse 3');

create table Achat (
    idAchatProduit integer not null auto_increment,
    idProduit integer,
    quantite integer,
    idCaisse integer,
    primary key (idAchatProduit)
)ENGINE=InnoDB;
insert into Achat values(null,'1',5,'1');
insert into Achat values(null,'2',7,'1');
insert into Achat values(null,'15',8,'3');