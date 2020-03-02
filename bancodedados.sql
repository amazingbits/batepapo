drop database if exists batepapo;
create database batepapo;
use batepapo;

create table if not exists sala(
id int not null auto_increment,
nome varchar(255) not null,
primary key(id));

insert into sala values (null, "Esportes"),
						(null, "Entretenimento"),
                        (null, "Desenhos"),
                        (null, "Desenvolvimento"),
                        (null, "Música");

create table if not exists usuario_online(
id_user varchar(255) not null,
nome_user varchar(255) not null,
id_sala int not null,
data datetime not null,
foreign key(id_sala) references sala(id),
primary key(id_user, id_sala));

create table if not exists chat(
id int not null auto_increment,
id_user varchar(255) not null,
nome_user varchar(255) not null,
id_sala int not null,
mensagem text not null,
data datetime not null,
foreign key (id_sala) references sala(id),
primary key(id));