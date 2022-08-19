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
INSERT INTO genre
VALUES (3, 'Roman', 'dlouhy dej, postavy se vyvijeji');
INSERT INTO genre
VALUES (3, 'Pohadka', 'ma stastny konec');

INSERT INTO author
VALUES (1, 'Alois', 'Jirasek', 1851);
INSERT INTO author
VALUES (2, 'Karel', 'Čapek', 1890);
INSERT INTO author
VALUES (3, 'Jo', 'Nesbo', 1960);
INSERT INTO author
VALUES (4, 'Josef', 'Capek', 1887);
INSERT INTO author
VALUES (5, 'Tomas', 'Garrigue Masaryk', 1850);

INSERT INTO book
VALUES (1, 'Snehulak', 978-80-87497-45-6, 520, 'Zajimava Kniha', 1);
INSERT INTO book
VALUES (2, 'Proti Vsem', 978-80-907799-0-7, 195, 'Zajimavy Roman', 3);
INSERT INTO book
VALUES (4, 'Povidky malostranske', 454-91-9014865-2-8, 500, 'Zajimava dlouha povidka', 2);

INSERT INTO book
VALUES (5, 'Povidky z jedne kapsy', 454-91-9014865-2-8, 400, 'Zajimava povidka', 2);
INSERT INTO book
VALUES (6, 'Povidky z druhe kapsy', 152-45-901586-4-2, 400, 'Zajimava druha povidka', 2);