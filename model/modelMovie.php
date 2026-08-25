<?php 

class Movie {
// attribut
    private ?int $id; 
    private ?string $title; 
    private ?string $synopsis; 
    private ?string $releaseDate; 
    private ?float $rating; 
    private ?string $producer; 
    private PDO $bdd;

    public function __construct(PDO $bdd) {
        $this->bdd = $bdd; 
    }

//METHODE 
//fonction pour récuperer les données sur les films dans un tableau
    public function findAll():?array{
        try{
            //1. Préparer une requête pour SELECT les films
            //On utilise l'objet PDO stocké dans l'attribut bdd de notre model ($this->bdd)
            $req = $this->bdd->prepare('SELECT m.id, m.title, m.synopsis, m.release_date, m.rating, p.lastname, p.firstname FROM movie as m INNER JOIN producer as p ON p.id = m.producer_id');

            //2. Exécution de la requête
            $req->execute();

            //3. Return des données des films
            return $req->fetchAll(PDO::FETCH_ASSOC);
        }catch(EXCEPTION $error){
            die($error->getMessage());
        }
    }
}


?>