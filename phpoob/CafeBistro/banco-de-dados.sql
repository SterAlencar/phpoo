create database cafebistro_phpoo_turmaB;
use cafebistro_phpoo_turmaB;
create table usuario(id int
auto_increment primary key,
nome varchar(255),
email varchar(255),
senha varchar(255));
select * from usuario;

CREATE TABLE produtos (
	id INT NOT NULL AUTO_INCREMENT,
	tipo VARCHAR(45) NOT NULL,
	nome VARCHAR(45) NOT NULL,
	descricao VARCHAR(90) NOT NULL,
	imagem VARCHAR(80) NOT NULL,
	preco DECIMAL(5,2) NOT NULL,
PRIMARY KEY (id)); 
select * from produtos;