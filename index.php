<?php

class Movie
{
    protected $title;
    protected $releaseDate;
    protected $adultFilm;
    protected $genre;

    function __construct($_title, $_releaseDate, $_adultFilm, Genre $_genre)
    {
        $this->title       = $_title;
        $this->releaseDate = $_releaseDate;
        $this->adultFilm   = $_adultFilm;
        $this->genre       = $_genre;
    }

    public function isForAdult()
    {
        return $this->adultFilm == true;
    }
}

class Genre
{
    protected $genre;

    function __construct($_genre)
    {
        $this->genre = $_genre;
    }

    public function getGenre()
    {
        return $this->genre;
    }
}

$action   = new Genre('Action');
$romantic = new Genre('Romantic');

$vForVendetta = new Movie('V For Vendetta', 2005, true, $action);
$titanic      = new Movie('Titanic', 1997, false, $romantic);

var_dump($vForVendetta);

var_dump($titanic);

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        *{
            background-color: black !important;
            color: white !important;
        }
    </style>
</head>
<body>
    
</body>
</html>