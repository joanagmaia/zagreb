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
