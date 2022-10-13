<?php

require_once __DIR__ . '/../../_connec.php';
require_once __DIR__ . '/../models/vinyl-model.php';

function browseVinyls(): void
{
    $vinyls = getAllVinyls();

    require __DIR__ . '/../views/index.php';
}

function addVinyl(): void 
{   
    $errors= [];

    if($_SERVER["REQUEST_METHOD"] === 'POST') 
    {
        $vinyl = array_map('trim', $_POST);
        
    
        if(!isset($vinyl['title']) || empty($vinyl['title']))
        $errors[] = "Le titre est obligatoire";
    
        if(strlen($vinyl['title']) > 200)
        $errors[] = "Le titre ne doit pas dépasser 200 caractères";
    
        if(!isset($vinyl['cover']) || empty($vinyl['cover']))
        $errors[] = "L'url est obligatoire";
    
        if(!filter_var($vinyl['cover'], FILTER_VALIDATE_URL))
        $errors[] = "L'url comporte une erreur";
    
        if(!isset($vinyl['artist']) || empty($vinyl['artist']))
        $errors[] = "L'artiste est obligatoire";
    
        if(strlen($vinyl['artist']) > 200)
        $errors[] = "L'artiste ne doit pas dépasser 200 caractères";   
    
    
        if(!empty($errors)) 
        {
            echo "<h2>Non essayez encore</h2>";
            foreach ($errors as $error)     
            echo "<li>". $error . "</li><br>";
        } 
        else 
        {
            echo "<h2>Bravo le nouveau Vinyl a bien été transmis !</h2>";
        
            if($vinyl['genre'] === 'disco')
            {
                echo "<h2>Mais merci de bien vouloir brûler ce vinyl et s'il vous plait n'utilisez plus cette plateforme!</h2>";
            };

           
    
            saveAVinyl($vinyl);
           
        }
        
    }

    require __DIR__ . '/../views/form.php';
}