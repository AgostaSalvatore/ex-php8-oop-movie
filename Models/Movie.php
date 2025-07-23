<?php
class Movie
{
    // istanze
    protected $title;
    protected $releaseDate;
    protected $adultFilm;
    protected $genres;  // Cambiato da $genre a $genres (array)

    // costruttore
    function __construct($_title, $_releaseDate, $_adultFilm, array $_genres)
    {
        $this->title       = $_title;
        $this->releaseDate = $_releaseDate;
        $this->adultFilm   = $_adultFilm;
        $this->genres      = $_genres;
    }

    // metodo
    public function isForAdult()
    {
        return $this->adultFilm == true;
    }
}

?>