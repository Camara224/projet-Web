<?php

require_once("controllers/Controller.php");
class Router
{
    public function main()
    {
        $controller = new Controller();

        $voitureId = key_exists('voiture', $_GET)? $_GET['voiture']: null;
        $action = key_exists('action', $_GET)? $_GET['action']: null;

        if($action === null)
        {
            $action = ($voitureId === null)? "accueil": "voir";
        }

        try {
            
            switch($action){
                case "accueil":
                    $controller->accueil();
                    break;
                case "apropos":
                    $controller->apropos();
                    break;
                case "connexion":
                    
                    
            }
        } catch (\Throwable $th) {
            //throw $th;
        }
    }
}