create table got_article(
    id integer auto_increment primary key,
    designation varchar(250) not null,
    preposition varchar(10) not null);

insert into got_article (designation,preposition) values
    ("acacia","d'"),
    ("forêt","de"),
    ("printemps","de"),
    ("tournesol","de"),
    ("été","d'")
;

insert into got_article2 (refArticle,typeArticle,designation,poids,prixUnitaire,stockInit) values
    ("id_got_article","250 g",5,65),
    ("aca_500_2023","acacia","Miel d'acacia","500 g",10,206),
    ("aca_1000_2023","acacia","Miel d'acacia","1 kg",15,130),
    ("aca_5000_2023","acacia","Miel d'acacia","5 kg",NULL,0),
    ("aca_10000_2023","acacia","Miel d'acacia","10 kg",NULL,0),
    ("aca_40000_2023","acacia","Miel d'acacia","40 kg",NULL,0),
    ("frt_250_2023","forêt","Miel de forêt","250 g",5,81),
    ("frt_500_2023","forêt","Miel de forêt","500 g",10,105),
    ("frt_1000_2023","forêt","Miel de forêt","1 kg",15,26),
    ("frt_5000_2023","forêt","Miel de forêt","5 kg",NULL,0),
    ("frt_10000_2023","forêt","Miel de forêt","10 kg",NULL,0),
    ("frt_40000_2023","forêt","Miel de forêt","40 kg",NULL,0),
    ("pts_250_2023","printemps","Miel de printemps","250 g",5,60),
    ("pts_500_2023","printemps","Miel de printemps","500 g",10,97),
    ("pts_1000_2023","printemps","Miel de printemps","1 kg",15,164),
    ("pts_5000_2023","printemps","Miel de printemps","5 kg",NULL,0),
    ("pts_10000_2023","printemps","Miel de printemps","10 kg",NULL,0),
    ("pts_40000_2023","printemps","Miel de printemps","40 kg",NULL,0),
    ("tns_250_2023","tournesol","Miel de tournesol","250 g",5,60),
    ("tns_500_2023","tournesol","Miel de tournesol","500 g",10,97),
    ("tns_1000_2023","tournesol","Miel de tournesol","1 kg",15,164),
    ("tns_5000_2023","tournesol","Miel de tournesol","5 kg",NULL,0),
    ("tns_10000_2023","tournesol","Miel de tournesol","10 kg",NULL,0),
    ("tns_40000_2023","tournesol","Miel de tournesol","40 kg",NULL,0),
    ("ete_250_2023","été","Miel d'été","250 g",5,65),
    ("ete_500_2023","été","Miel d'été","500 g",10,206),
    ("ete_1000_2023","été","Miel d'été","1 kg",15,130),
    ("ete_5000_2023","été","Miel d'été","5 kg",NULL,0),
    ("ete_10000_2023","été","Miel d'été","10 kg",NULL,0),
    ("ete_40000_2023","été","Miel d'été","40 kg",NULL,0),
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