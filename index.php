<?php

require_once './Traits/Rating.php';

// Classe Generi
class Genre
{
    public $genre = [];
    public $genreColor = "info";

    function __construct($_genre, $_genreColor)
    {
        $this->genre = $_genre;
        $this->genreColor = $_genreColor;
    }
}

// Classe Movie
class Movie
{
    public $name;
    public $productor;
    public $year;
    public $genre;

    // Trait Password
    use Rating;

    function __construct($_name, $_productor, $_year, Genre $_genre)
    {
        $this->name = $_name;
        $this->productor = $_productor;
        $this->year = $_year;
        $this->genre = $_genre;
    }

    public function isRecent()
    {
        return $this->year >= date('Y') - 10;
    }
}

// Aggiunta Film alla Classe Movie e Aggiunta Genere dei Movie
$oppenheimer = new Movie('Oppenheimer', 'Christopher Nolan', 2023, new Genre(['Drama', 'History'], "primary"));
$interstellar = new Movie('Interstellar', 'Steven Spielberg', 2014, new Genre(['Drama', 'Sci-Fi'], "success"));

// Nuovo Rating
$oppenheimer->setRating(3);
$interstellar->setRating(4);

// Var_Dump
var_dump($oppenheimer);
var_dump($oppenheimer->isRecent());
var_dump($interstellar);
var_dump($interstellar->isRecent());
