-- DROP TABLE categories;

CREATE TABLE categories (
	id INT NOT NULL PRIMARY KEY AUTO_INCREMENT,
	name VARCHAR(50) NOT NULL UNIQUE
);

INSERT INTO categories (name) VALUES ("Comédie");
INSERT INTO categories (name) VALUES ("Drames");
INSERT INTO categories (name) VALUES ("Comédie romantique");
INSERT INTO categories (name) VALUES ("Romantique");
INSERT INTO categories (name) VALUES ("Documentaire");
INSERT INTO categories (name) VALUES ("Horreur");
INSERT INTO categories (name) VALUES ("Policier");
INSERT INTO categories (name) VALUES ("Enfants et Famille");
INSERT INTO categories (name) VALUES ("Action et Aventure");
INSERT INTO categories (name) VALUES ("Anime");
INSERT INTO categories (name) VALUES ("Thriller");
