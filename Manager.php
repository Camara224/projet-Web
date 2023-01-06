<?php
class Manager
{

    function dbconnect()
    {
    try
    {
        $bdd = new PDO('mysql:host=localhost;dbname=parking;charset=utf8', 'camara', 'camara');
    }
    catch(Exception $e)
    {
            die('Erreur : '.$e->getMessage());
    }

    }

}

