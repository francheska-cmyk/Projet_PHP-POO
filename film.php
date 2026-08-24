<?php
class Film {
    private string $titre; 
    private string $realisateur; 
    private string $synopsis; 
    private string $dateDeSortie; 
    private string $genre; 
    private float $note; 

 //Constructeur
    public function __construct($title, $producer,$abstract, $date, $type, $mark)
    {
        $this->titre = $title;
        $this->realisateur = $producer;
        $this->synopsis = $abstract;
        $this->dateDeSortie= $date;
        $this->genre = $type;
        $this->note = $mark;
    }


// Methode 
public function afficherFiche(): void {
    echo "$this->titre \n 
    $this->realisateur \n
    $this->synopsis \n  
    $this->dateDeSortie \n
    $this->genre \n
    $this->note \n"; 
    
}

// fonction getter

public function getTitre(): string
{
    return $this->titre;
    }


public function getRealisateur(): string
{
    return $this->realisateur;
}

public function getSynopsis(): string
{
    return $this->synopsis;
}


public function getDateDeSortie(): string
{
    return $this->dateDeSortie;
}


public function getGenre(): string
{
    return $this->genre;
}


public function getNote(): float
{
    return $this->note;
}
}

?> 