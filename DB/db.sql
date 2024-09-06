create table cliente (
	id int primary key AUTO_INCREMENT,
	nome varchar(255) not null,
	telefone int (11),
	cep int (8),
	email varchar(255),
	cpf int(11)
);

insert into cliente values(null, 'Caue', null, 71995115, 'cauebraga@outlook.com', 0289402);

create table servicos (
	id int primary key AUTO_INCREMENT,
	tipo varchar (45),
	preco float(10,2)
);