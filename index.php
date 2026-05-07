<?php
// Classe Generi
class Genre
{
    public $genre;
    public $genre_color = "info";

    function __construct($_genre, $_genre_color)
    {
        $this->genre = $_genre;
        $this->genre_color = $_genre_color;
    }
}

// Classe Movie
class Movie
{
    public $name;
    public $productor;
    public $year;
    public $genre;

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

$oppenheimer = new Movie('Oppenheimer', 'Christopher Nolan', 2023, new Genre('Drama', "primary"));
$interstellar = new Movie('Interstellar', 'Steven Spielberg', 2014, new Genre('Sci-Fi', "success"));



var_dump($oppenheimer);
var_dump($oppenheimer->isRecent());
var_dump($interstellar);
var_dump($interstellar->isRecent());
