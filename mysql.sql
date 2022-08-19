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
    id int NOT NULL AUTO_INCREMENT,
    name varchar(255) NOT NULL,
    ISBN varchar(255) NOT NULL,
    pocetstran varchar(255) NOT NULL,
    describing text,
    genre_id int NOT NULL,
    FOREIGN KEY (genre_id) REFERENCES genre(id),
    PRIMARY KEY (id)
);

CREATE TABLE book_author (
    book_id int NOT NULL,
    author_id int NOT NULL,
    FOREIGN KEY (book_id) REFERENCES book(id),
    FOREIGN KEY (author_id) REFERENCES author(id)

);

/* SELECT shortname, number, lastname FROM schedule sch
JOIN subjects su ON sch.id_subject = su.id_subject
JOIN classrooms cl ON sch.id_classroom = cl.id_classroom
JOIN teachers te ON sch.id_teacher = te.id_teacher; */

SELECT b.ISBN, b.name, a.forename, a.surname, g.name  FROM book b
JOIN book_author b_a ON b_a.book_id = b.id
JOIN author a ON a.id = b_a.author_id
JOIN genre g ON g.id = b.genre_id;

INSERT INTO genre
VALUES (1, thriller, 'ma vyvolat napeti u ctenare');
INSERT INTO genre
VALUES (2, povidka, 'kratky dej, postavy se nevyvijeji');


INSERT INTO author
VALUES (1, Alois Jirasek, 1851);
INSERT INTO author
VALUES (2, Karel	Čapek, 1890);
INSERT INTO author
VALUES (3, Jo	Nesbo, 1960);

INSERT INTO book
VALUES (1, Snehulak, 978-80-87497-45-6, 520, Zajimava Kniha, 1);