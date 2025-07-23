<?php

require_once './Models/Movie.php';
require_once './Models/Genre.php';

$action   = new Genre('Action');
$romantic = new Genre('Romantic');

$vForVendetta = new Movie('V For Vendetta', 2005, true, [$action]);
$titanic      = new Movie('Titanic', 1997, false, [$romantic, $action]);

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