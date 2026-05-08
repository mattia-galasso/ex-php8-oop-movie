<?php
//Require PHP
require_once './Traits/Rating.php';
require_once './Models/Genre.php';

// Classe Movie
class Movie
{
    public $title;
    public $productor;
    public $year;
    public array $genre;
    public $coverIMG;

    // Trait Rating
    use Rating;

    function __construct($_title, $_productor, $_year, Genre $_genre, $_coverIMG)
    {
        $this->title = $_title;
        $this->productor = $_productor;
        $this->year = $_year;
        $this->genre = [$_genre];
        $this->coverIMG = $_coverIMG;
    }

    public function isRecent()
    {
        return $this->year >= date('Y') - 10;
    }

    public function addGenre(Genre $_genre)
    {
        array_push($this->genre, $_genre);
    }

    public function getHtmlCard()
    {
        $html = '<ul class="card-container text-light">';
        $html .= '<div class="single-badge">';

        // SE IL MOVIE E' RECENTE
        $this->isRecent() ? $html .= '<li class="text-light my-2 card-badge"><span class="badge text-bg-danger">Recente</span></li>' : $html .= '';

        // ARRAY DEI GENERI PER AGGIUNGERE IL BADGE
        foreach ($this->genre as $movieGenre) {
            $html .= '<li class="text-light my-2 card-badge"><span class="badge text-bg-' . $movieGenre->genreColor . '">' . $movieGenre->genre . '</span></li>';
        }

        $html .= '</div>';
        $html .= '<li class="fs-5">' . $this->title . '</li>';
        $html .= '<li class="my-3 fs-5">' . $this->productor . '</li>';
        $html .= '<li class="fs-5">' . $this->year . '</li>';
        $html .= '<img class="mt-4" src="./Assets/img/Cover/' . $this->coverIMG . '" alt="Immagine Copertina">' .
            '</ul>';

        return $html;
    }
}
