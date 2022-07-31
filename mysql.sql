CREATE TABLE author (
    forename varchar(255) NOT NULL,
    surname varchar(255) NOT NULL,
    birthdate int NOT NULL,
    PRIMARY KEY (surname)
);

CREATE TABLE genre (
    name VARCHAR(300) NOT NULL,
    description TEXT
);