<?php
    try
    {
        $bdd = new PDO('mysql:host=localhost;dbname=blizzart', 'root', 'root');
    }
    catch(Exception $e)
    {
        die('Erreur : '.$e->getMessage());
    }
    ?>
