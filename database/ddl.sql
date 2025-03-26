-- Data Definiton Language
-- CREATE, ATER, DROP

create database produtos_suzuki;

create table categorias(
id int primary key auto_increment,
nome varchar(200),
descricao text
);

create table produtos(
id int primary key auto_increment,
nome varchar(200),
Descricao text,
Preco float,
id_categoria int not null,
foreign key (IdCategoria) references Categorias(Id)
);

create table usuarios(
id int primary key auto_increment,
nome varchar(200),
email varchar(70),
senha varchar(30),
telefone varchar(30),
data_nascimento date,
cpf varchar(11) not null
);

