CREATE DATABASE coffelovers;
use coffelovers;
CREATE TABLE usuario(pnome varchar(30), snmoe varchar(50), cpf char(11), email varchar(50), telefone varchar(30) usuario varchar(30), senha varchar(20), data_nascimento date NOT NULL, sexo varchar(10), coffe varchar(100), tipo varchar(100), marcas varchar(100), comentario varchar(200), PRIMARY KEY(cpf));
CREATE TABLE user(id int serial NOT NULL,  varchar(30), senha varchar(20), PRIMARY KEY(id),FOREIGN KEY usuario REFERENCES usuario(usuario), FOREIGN KEY senha REFERENCES senha(usuario););