<?php

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
