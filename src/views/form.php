<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ajouter un nouveau vinyl</title>
    <link rel="stylesheet" href="C:\Users\estel\quests\sept22_checkpoint1_review\style.css">
</head>

<body>


    <header>
        <h1>Ma collection de vinyl</h1>
        <p>Citation sur la musique</p>
    </header>

    <nav>
        <ul>
            <li><a href="/">Accueil</a></li>
            <li><a href="/add">Ajouter</a></li>
        </ul>    
    </nav>

    <h1>Ajouter un nouveau vinyl</h1>
    <form  method="post">

    <p>
        <label for="title">Titre :</label>
        <input type="text" name="title" id="title">
    </p>

    <p>
        <label for="cover">Pochette :</label>
        <input type="url" name="cover" id="cover">
    </p>

    <p>
        <label for="artist">Artiste :</label>
        <input type="text" name="artist" id="artist">
    </p>

    <p>
        <label for="genre">Genre :</label>
        <select name="genre" id="genre">
            <option value="">--Please choose an option--</option>
            <option value="rock">rock</option>
            <option value="classic">classique</option>
            <option value="rap">rap</option>
            <option value="jazz">jazz</option>
            <option value="bo">BO de film</option>
            <option value="metal">métal</option>
            <option value="disco">disco</option>
        </select>
    <p>
    
    <p><button type="submit">Send</button>
</p>
</form>


    
</body>
</html>