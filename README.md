# 🎬 Filmathèque

Application web de gestion de films développée en **PHP orienté objet**, suivant l'architecture **MVC** (Modèle-Vue-Contrôleur), sans framework — dans le but de démontrer la compréhension de ces concepts fondamentaux.

## 🎯 Objectif du projet

Ce projet a été réalisé dans le cadre de ma préparation au titre professionnel **DWWM** (Développeur Web et Web Mobile), pour mettre en pratique et démontrer :
- La programmation orientée objet en PHP (classes, encapsulation, typage)
- L'architecture MVC construite manuellement (sans framework)
- La conception d'une base de données relationnelle (relations one-to-many et many-to-many)
- L'utilisation de PDO pour sécuriser les échanges avec la base de données

## 🛠️ Stack technique

- **PHP** 8+ (orienté objet)
- **MySQL** (via PDO)
- **HTML / CSS**
- Aucun framework — architecture MVC construite à la main

## 🗄️ Modèle de données

Le projet gère 3 entités liées :
- `movie` — les films (titre, synopsis, date de sortie, note...)
- `producer` — les réalisateurs (relation one-to-many avec `movie`)
- `genre` — les genres (relation many-to-many avec `movie`, via la table de liaison `movie_genre`)

## 📁 Structure du projet

```
├── config/
│   └── database.php       # Connexion PDO centralisée
├── models/
│   ├── Movie.php
│   ├── Genre.php
│   └── Producer.php
├── views/
│   └── movies/
│       └── list.php
├── controllers/
│   └── MovieController.php
├── index.php               # Point d'entrée / routeur
└── README.md
```

## ✅ État d'avancement

- [x] Modélisation et création de la base de données (relations one-to-many et many-to-many)
- [x] Connexion PDO centralisée (classe `Database`)
- [x] Architecture des dossiers MVC
- [ ] Modèle `Movie` (lecture des films avec jointures)
- [ ] Contrôleur et routeur
- [ ] Vue d'affichage de la liste des films
- [ ] Formulaire d'ajout d'un film (Create)
- [ ] Modification d'un film (Update)
- [ ] Suppression d'un film (Delete)

*Projet en cours de finalisation — CRUD complet à venir prochainement.*


## 📚 Ce que ce projet démontre

- Séparation claire des responsabilités (le Modèle ne gère jamais l'affichage, la Vue ne contient aucune logique métier)
- Utilisation de PDO avec gestion des erreurs par exceptions
- Conception d'une base de données normalisée avec clés étrangères