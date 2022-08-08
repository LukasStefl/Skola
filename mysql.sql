CREATE TABLE author (
    forename varchar(255) NOT NULL,
    surname varchar(255) NOT NULL,
    birthdate int NOT NULL,
    PRIMARY KEY (surname)
);

CREATE TABLE genre (
    id int NOT NULL,
    name VARCHAR(300) NOT NULL,
    description TEXT,
    PRIMARY KEY (id)
);

CREATE TABLE book (
    ISBN varchar(255) NOT NULL,
    pocetstran varchar(255) NOT NULL,
    describing text,
    genre_id
);


