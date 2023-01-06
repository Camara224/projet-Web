<?php
class Controller
{
    public function accueil()
    {
        $this->view("accueil.php");
    }


    public function apropos(){
        $nom = "Mamoudou";
        $this->view('apropos.php', compact('nom'));
    }


    public function connexion(){
        $this->view('connect.php');
    }

    public function listeVoiture(){
        $this->view('listeVoiture.php');
    }

    
    public function creerVoitur(){
        $this->view('creerVoiture.php');
    }



    public function view($view, $data = array())
    {
        extract($data);
        include_once("views/".$view);
    }
}