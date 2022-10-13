<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ma collection de vinyl !</title>
    <link rel="stylesheet" href="style.css">
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
    <h2>
    <?php
        echo 'Il y a ' . count($vinyls) . ' vinyl(s) dans la collection';
    ?>
    </h2>
    <main>
        <div>
            <?php
            foreach ($vinyls as $vinyl) {
                echo '<article>';              
                echo '<h2>' . $vinyl['title'] . '</h2>';
                echo '<img width=300px src="' . $vinyl['cover'] . '">';
                echo '<p>' . $vinyl['artist'] . '</p>';
                echo '<p>' . $vinyl['genre'] . '</p>';
                echo '</article>';  
            }
            ?>
        </div>
   
    </main>

    <footer>
    <ul>
        <li>Mathieu LECANU, mat.lecanu@gmail.com, https://github.com/Supzero-0 </li>
        <li>Charlène DA RUGNA, chdarugna.polytech@gmail.com, https://github.com/CharleneDR </li>
        <li>Benjamin HAMRAOUI, bnjhmr@gmail.com, https://github.com/Jottundr </li>
        <li>Sébastien PAPET papet.seb@gmail.com, https://github.com/sebtout</li>
        <li>Damien BROYER, broyerdamien@gmail.com, https://github.com/broyerdamien </li>
    </ul>
       
    </footer>
    
</body>
</html>