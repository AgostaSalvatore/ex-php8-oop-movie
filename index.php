<?php

class Movie
{
    public $title;
    public $releaseDate;
    public $genre;

    function __construct($_title, $_releaseDate, $_genre)
    {
        $this->title       = $_title;
        $this->releaseDate = $_releaseDate;
        $this->genre       = $_genre;
    }
}

$vForVendetta = new Movie('V For Vendetta', 2005, 'Action');
$titanic      = new Movie('Titanic', 1997, 'Romantic');

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