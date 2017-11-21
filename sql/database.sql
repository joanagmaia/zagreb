CREATE DATABASE zabreb_database;

CREATE TABLE album(
	id	 INT,
	artista	 TEXT NOT NULL,
	preco	 FLOAT NOT NULL,
	nome	 TEXT NOT NULL,
	ano	 INT NOT NULL,
	ranking	 FLOAT NOT NULL,
	genero	 TEXT NOT NULL,
	disponivel BOOLEAN NOT NULL,

	PRIMARY KEY(id)
);

CREATE TABLE utilizador(
	id		 NUMERIC(0,4),
	type_admin	 BOOL,
	name		 TEXT NOT NULL,
	email	 TEXT UNIQUE NOT NULL,
	password	 CHAR(20) NOT NULL,
	cliente_saldo FLOAT(8),

	PRIMARY KEY(id)
);

CREATE TABLE faixa(
	nome	 TEXT NOT NULL,
	duracao	 BOOL,
	album_id NUMERIC(0,4),

	PRIMARY KEY(album_id)
);

CREATE TABLE mensagem(
	message_id	 NUMERIC(8,2) DEFAULT '0',
	field	 TEXT NOT NULL,
	message_date DATE NOT NULL,
	creator	 TEXT NOT NULL,
	receiver	 BOOL,

	PRIMARY KEY(message_id)
);

CREATE TABLE operacao_cliente(
	operation_date DATE NOT NULL,
	quantidade	 INTEGER NOT NULL,
	preco_total	 FLOAT(8) NOT NULL,
  utilizador_id		 NUMERIC(0,4),
);

CREATE TABLE operacao_admin(
	type		 INTEGER NOT NULL,
	operation_date DATE NOT NULL,
	stock		 INTEGER NOT NULL,
  utilizador_id		 NUMERIC(0,4),
);

CREATE TABLE operacao_admin_album(
	album_id NUMERIC(0,4),

	PRIMARY KEY(album_id)
);

CREATE TABLE operacao_cliente_album(
	album_id NUMERIC(0,4),

	PRIMARY KEY(album_id)
);

CREATE TABLE cliente_mensagem(
	mensagem_message_id NUMERIC(8,2) DEFAULT '0',

	PRIMARY KEY(mensagem_message_id)
);

ALTER TABLE faixa ADD CONSTRAINT faixa_fk1 FOREIGN KEY (album_id) REFERENCES album(id);
ALTER TABLE operacao_cliente ADD CONSTRAINT operacao_cliente_fk1 FOREIGN KEY (utilizador_id) REFERENCES utilizador(id);
ALTER TABLE operacao_admin ADD CONSTRAINT operacao_admin_fk1 FOREIGN KEY (utilizador_id) REFERENCES utilizador(id);
ALTER TABLE operacao_admin_album ADD CONSTRAINT operacao_admin_album_fk1 FOREIGN KEY (album_id) REFERENCES album(id);
ALTER TABLE operacao_cliente_album ADD CONSTRAINT operacao_cliente_album_fk1 FOREIGN KEY (album_id) REFERENCES album(id);
ALTER TABLE cliente_mensagem ADD CONSTRAINT cliente_mensagem_fk1 FOREIGN KEY (mensagem_message_id) REFERENCES mensagem(message_id);
