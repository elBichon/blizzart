drop table if exists ecoles;
create table ecoles (
                       id integer not null primary key auto_increment,
                       nom varchar(50) not null,
                       nomUrl integer not null,
                       url text not null
                       ) engine=innodb character set utf8 collate utf8_unicode_ci;


drop table if exists event;
create table event (
                       id integer not null primary key auto_increment,
                       festival text not null,
                       quand text not null,
                       equipes text not null,
                       qui text not null
                        ) engine=innodb character set utf8 collate utf8_unicode_ci;


drop table if exists entreprises;
create table entreprises (
                       id integer not null primary key auto_increment,
                       textEntreprise text not null,
                       EntrepriseP2 text not null
                       ) engine=innodb character set utf8 collate utf8_unicode_ci;


drop table if exists images;
create table images (
                    id integer not null primary key auto_increment,
                    nomEcole integer,
                    nom varchar(40) not null
                    ) engine=innodb character set utf8 collate utf8_unicode_ci;





