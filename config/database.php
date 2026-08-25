<?php
// METHODE A pour créer la connexion

//utilisation de classe plutot que new PDO() 
//Evite de réécrire host/user/password à chaque demande de connexion d'un Model 
// une seule modification si change serveur 

// class Database {
//     private string $host = "127.0.0.1";
//     private string $dbname = "movie_library";
//     private string $user = "root";
//     private string $password = "root";
//     private ?PDO $connexion = null; // "?" pour typage nullable, propriété est soit un objet PDO soit null 

//     public function getConnexion(): PDO {
//         if ($this->connexion === null) {
//             $dsn = "mysql:host={$this->host};dbname={$this->dbname};charset=utf8mb4";
//             $this->connexion = new PDO($dsn, $this->user, $this->password);
//             $this->connexion->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
//         }
//         return $this->connexion;
//     }
// }


// METHODE B pour créer la connexion sans classe

function connect (){
    return new PDO('mysql:host=127.0.0.1:3306;dbname=movie_library', 'root', 'root', [
        PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION
    ]); 
}
?>
