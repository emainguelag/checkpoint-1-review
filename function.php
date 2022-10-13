<?php

require_once '_connec.php';


function addVinyl (array $vinyl) : void
{
    $pdo = new PDO(DSN, USER, PASS);

    $query = "INSERT INTO vinyl (title, cover, artist, genre)
    VALUES (:title, :cover, :artist, :genre);";

    $statement = $pdo->prepare($query);
    $statement->bindValue(':title', $vinyl['title'], PDO::PARAM_STR);
    $statement->bindValue(':cover', $vinyl['cover'], PDO::PARAM_STR);
    $statement->bindValue(':artist', $vinyl['artist'], PDO::PARAM_STR);
    $statement->bindValue(':genre', $vinyl['genre'], PDO::PARAM_STR);
    $statement->execute();

}