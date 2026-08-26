<?php
include ('modelMovie.php'); 
include ('viewMovie.php')
function displayMovies(){
    //1. CONNEXION A LA BDD
    $bdd -> connect ($bdd); 


    //2. Appel model pour récupérer les données 
$data -> findAll ($data); 

    // 3. Transmet les données à view pour affichage 
    function setData  (){

    }

    
}

?>
