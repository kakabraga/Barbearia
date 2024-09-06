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

create table compras (
	id int primary key AUTO_INCREMENT,
	data_compra TIMESTAMP DEFAULT  CURRENT_TIMESTAMP,
	id_cliente int,
	id_servico int,
	id_forma_pagamento int(10),
	preco float(10,2)
);

create table forma_pagamento (
	id int primary key AUTO_INCREMENT,
	forma char(10)
);

INSERT INTO `forma_pagamento`(`id`, `forma`) VALUES (null,'CREDITO');
INSERT INTO `forma_pagamento`(`id`, `forma`) VALUES (null,'DEBITO');
INSERT INTO `forma_pagamento`(`id`, `forma`) VALUES (null,'DINHEIRO');


ALTER TABLE compras 
ADD CONSTRAINT fk_id_cliente 
FOREIGN KEY (id_cliente) REFERENCES cliente(id);

ALTER TABLE compras 
ADD CONSTRAINT fk_id_servico
FOREIGN KEY (id_servico) REFERENCES servicos (id);
ALTER TABLE compras 
ADD CONSTRAINT fk_id_forma_pagamento
FOREIGN KEY (id_forma_pagamento) REFERENCES forma_pagamento (id);

INSERT INTO compras values(null, null,6,1,5,15);