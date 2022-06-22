Act-3.1.7
SELECT titre,resum FROM film WHERE lower(resum) LIKE '%vincent%' order by 'id_film' asc;