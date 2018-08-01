create database educandus;

create table contas (
	id INT (6) AUTO_INCREMENT PRIMARY KEY,
	descricao VARCHAR(10)
);

create table usuario (
	id INT (6) AUTO_INCREMENT PRIMARY KEY,
	email VARCHAR (50),
	senha VARCHAR (16),
	id_contas int(6),
	foreign key  (id_contas) references contas (id)

);

create table arquivo (
	id INT (6) AUTO_INCREMENT PRIMARY KEY,
	descricao VARCHAR(100),
	id_usuario int(6),
	foreign key  (id_usuario) references usuario (id)
);
