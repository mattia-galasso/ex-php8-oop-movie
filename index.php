<?php

require_once './Traits/Rating.php';

// Classe Generi
class Genre
{
    public $genre;
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
    public array $genre;

    // Trait Password
    use Rating;

    function __construct($_name, $_productor, $_year, Genre $_genre)
    {
        $this->name = $_name;
        $this->productor = $_productor;
        $this->year = $_year;
        $this->genre = [$_genre];
    }

    public function isRecent()
    {
        return $this->year >= date('Y') - 10;
    }

    public function addGenre(Genre $_genre)
    {
        array_push($this->genre, $_genre);
    }
}

// Aggiunta Film alla Classe Movie e Aggiunta Generi dei Movie
$oppenheimer = new Movie('Oppenheimer', 'Christopher Nolan', 2023, new Genre('Drama', "primary"));
$interstellar = new Movie('Interstellar', 'Steven Spielberg', 2014, new Genre('Drama', "success"));

// Aggiunta Genere a Movie
$oppenheimer->addGenre(new Genre('History', "secondary"));
$interstellar->addGenre(new Genre('Sci-Fi', "success"));

// Nuovo Rating
$oppenheimer->setRating(3);
$interstellar->setRating(4);

// Var_Dump
var_dump($oppenheimer);
var_dump($oppenheimer->isRecent());
var_dump($interstellar);
var_dump($interstellar->isRecent());
