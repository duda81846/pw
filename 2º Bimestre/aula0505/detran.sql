CREATE DATABASE detran;
USE detran;

create table veiculos (placa varchar(07) primary key, veiculo varchar(40), marca varchar(30), cor varchar(30), ano int(4), proprietario varchar(40), fone varchar(11), opcionais varchar(200));

