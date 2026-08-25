<?php 

require_once ('./config/database.php'); 

class Movie {
    private ?PDO $connexion = null;


    public function __construct(PDO $connexion) {
        $this->connexion = $connexion;
        $this->connexion -> getConnexion();


    }

}


?>