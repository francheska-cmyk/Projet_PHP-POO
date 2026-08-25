<?php 

class Movie {
    private PDO $bdd;

    public function __construct(PDO $bdd) {
        $this->bdd = $bdd; 

    }
}

?>