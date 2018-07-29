create database educandus;


create table usuario (
	id INT (6) AUTO_INCREMENT PRIMARY KEY,
	email VARCHAR (50),
	senha VARCHAR (16),
	tipo_conta VARCHAR (10)
);
