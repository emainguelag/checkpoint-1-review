<?php



function createConnection(): PDO 
{
    return new PDO(DSN,USER,PASS);
}

function getAllVinyls(): array 
{
    $pdo = createConnection();

    $query = "SELECT * FROM vinyl";
    $statement = $pdo->query($query);
    $vinyls = $statement->fetchAll();

    return $vinyls;
}

function saveAVinyl (array $vinyl) : void
{
    $pdo = createConnection();

    $query = "INSERT INTO vinyl (title, cover, artist, genre)
    VALUES (:title, :cover, :artist, :genre);";

    $statement = $pdo->prepare($query);
    $statement->bindValue(':title', $vinyl['title'], PDO::PARAM_STR);
    $statement->bindValue(':cover', $vinyl['cover'], PDO::PARAM_STR);
    $statement->bindValue(':artist', $vinyl['artist'], PDO::PARAM_STR);
    $statement->bindValue(':genre', $vinyl['genre'], PDO::PARAM_STR);
    $statement->execute();

}