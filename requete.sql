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
    (0,1,5,60),
    (0,2,10,97),
    (0,3,15,164),
    (0,4,NULL,0),
    (0,5,NULL,0),
    (0,6,NULL,0),
    (1,1,5,206),
    (1,2,10,130),
    (1,3,15,0),
    (1,4,NULL,0),
    (1,5,NULL,0),
    (1,6,NULL,0),
    (2,1,5,81),
    (2,2,10,105),
    (2,3,15,26),
    (2,4,NULL,0),
    (2,5,NULL,0),
    (2,6,NULL,0),
    (3,1,5,65),
    (3,2,10,206),
    (3,3,15,130),
    (3,4,NULL,0),
    (3,5,NULL,0),
    (3,6,NULL,0),
    (4,1,5,60),
    (4,2,10,97),
    (4,3,15,164),
    (4,4,NULL,0),
    (4,5,NULL,0),
    (4,6,NULL,0)
;

create table got_civilite(
    id integer auto_increment primary key,
    libele varchar(2) not null unique,
);
insert into got_civilite(libele) values
    ("M"),
    ("MM");

create table got_client(
    id integer auto_increment primary key,
    numClient varchar(20) not null unique,
    dateCommande date default now() not null,
    client_id int not null,
    foreign key (client_id) references client(id)
);