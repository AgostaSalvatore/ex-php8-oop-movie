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

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    
</body>
</html>