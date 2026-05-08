<?php

require_once './Models/Movie.php';

// Aggiunta Film alla Classe Movie e Aggiunta Generi dei Movie
$oppenheimer = new Movie('Oppenheimer', 'Christopher Nolan', 2023, new Genre('Drama', "primary"), 'oppenheimer_cover.png');
$interstellar = new Movie('Interstellar', 'Steven Spielberg', 2014, new Genre('Drama', "primary"), 'interstellar_cover.png');

// Aggiunta Genere a Movie
$oppenheimer->addGenre(new Genre('History', "secondary"));
$interstellar->addGenre(new Genre('Sci-Fi', "success"));

// Nuovo Rating
$oppenheimer->setRating(3);
$interstellar->setRating(4);

// Array Movies
$movies = [$oppenheimer, $interstellar];


// Var_Dump
/* var_dump($oppenheimer);
var_dump($oppenheimer->isRecent());
var_dump($interstellar);
var_dump($interstellar->isRecent()); */
