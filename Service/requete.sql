create database MielsGobert;

create table article(
    id integer auto_increment primary key,
    referenceArticle varchar(10) not null,
    typeArticle varchar(30) not null,
    preposition varchar(10),
    designation varchar(250) not null
    );

insert into article(referenceArticle,typeArticle,preposition,designation) values
    ("pts","miel","de","printemps"),
    ("aca","miel","d'","acacia"),
    ("frt","miel","de","forêt"),
    ("ete","miel","d'","été"),
    ("tns","miel","de","tournesol")
;

create table poids(
    id integer auto_increment primary key,
    poids int
    );

insert into poids(poids) values
    (0),
    (250),
    (500),
    (1000),
    (5000),
    (10000),
    (40000)
;

create table prixstock(
    id integer auto_increment primary key,
    article_id int not null,
    poids_id int not null,
    prix NUMERIC(10,2),
    stock int not null,
    foreign key(article_id) references article(id),
    foreign key(poids_id) references poids(id)
    );

insert into prixstock(article_id,poids_id,prix,stock) values
    (1,2,5,60),
    (1,3,10,97),
    (1,4,15,164),
    (1,5,NULL,0),
    (1,6,NULL,0),
    (1,7,NULL,0),
    (2,2,5,206),
    (2,3,10,130),
    (2,4,15,0),
    (2,5,NULL,0),
    (2,6,NULL,0),
    (2,7,NULL,0),
    (3,2,5,81),
    (3,3,10,105),
    (3,4,15,26),
    (3,5,NULL,0),
    (3,6,NULL,0),
    (3,7,NULL,0),
    (4,2,5,65),
    (4,3,10,206),
    (4,4,15,130),
    (4,5,NULL,0),
    (4,6,NULL,0),
    (4,7,NULL,0),
    (5,2,5,60),
    (5,3,10,97),
    (5,4,15,164),
    (5,5,NULL,0),
    (5,6,NULL,0),
    (5,7,NULL,0)
;

create table civilite(
    id integer auto_increment primary key,
    libele varchar(2) not null unique
);

insert into civilite(libele) values
    ("M"),
    ("MM");

create table user(
    id integer auto_increment primary key,
    username varchar(100) not null unique,
    administrateur boolean not null default 0,
    civilite_id int,
    nom varchar(250) not null,
    prenom varchar(250) not null,
    adresse varchar(250)not null,
    ville varchar(250)not null,
    codePostal CHAR(10)not null,
    email varchar(250)not null,
    telephone CHAR(10),
    password varchar(200) not null,
    foreign key (civilite_id) references civilite(id)
);

insert into user(username,administrateur,civilite_id,nom,prenom,adresse,codePostal,ville,email,telephone,password) values
    ("tgobert",1,1,"Gobert","Timothée","7 rue du petit huis",89510,"Véron","timothee.gobert92@gmail.com",0662698480,sha1('isnt'));
