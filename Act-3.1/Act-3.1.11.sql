Act-3.1.11
SELECT titre AS Titre ,resum AS Resume FROM (SELECT * FROM `film` JOIN `genre` ON film.id_genre = genre.id_genre AND nom="fantasy");