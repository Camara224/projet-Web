
create table users(
    id int primary key,
    name varchar(100),
    prenom varchar(100),
    login varchar(100),
    password varchar(100)
);

CREATE TABLE voitures(
    id int primary key,
    id_user int,
    name varchar(250),
    marque varchar(250),
    kilometreParcourue int,
    CONSTRAINT fkUserVoiture  FOREIGN KEY(id_user) REFERENCES users(id)
);


INSERT INTO users (id, name, prenom, login, password) VALUES 
       (1, 'Camara', 'Mamoudou', 'camara', 'camara');


INSE