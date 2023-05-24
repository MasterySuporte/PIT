create database pit;
use pit;

create table usuario(
usuario_id int primary key auto_increment,
nome varchar(30) not null,
sobrenome varchar(100) not null,
email varchar(100) not null,
senha int not null,
fk_endereco int not null,
cpf char(14) not null,
sexo varchar(30) not null,
telefone char(15) not null,
foreign key (fk_endereco) references endereco(endereco_id)
);

create table endereco(
endereco_id int primary key not null auto_increment,
cidade varchar(45) not null,
estado varchar(45) not null,
rua varchar(45) not null,
bairro varchar(45) not null,
complemento varchar(45) not null
);

create table servico(
servico_id int primary key auto_increment not null,
tipo varchar(45) not null,
data_inicio DATETIME not null,
data_final DATETIME not null,
fk_profissional int not null,
valor decimal(9,2) not null,
descricao varchar(200) not null,
foreign key (fk_profissional) references profissional(profissional_id)
);

create table profissional(
profissional_id int primary key auto_increment not null,
nome varchar(45) not null,
sobrenome varchar(80) not null,
email varchar(100) not null,
cpf char(14) not null,
telefone char(15) not null,
senha int not null,
fk_endereco int not null,
descricão_profissional varchar(300) not null,
foreign key (fk_endereco) references endereco(endereco_id)
);

select * from usuario;
select * from profissional;
select * from servico;
select * from endereco;

