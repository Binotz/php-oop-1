<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Document</title>
</head>
<body>
    <?php

        class Movie{
            public $title;
            public $genre;
            public $releaseDate;
            public $cover;
            public $director;

            public function __construct($_title, $_genre, $_releaseDate, $_cover, $_director){
                $this->title = $_title;
                $this->genre = $_genre;
                $this->releaseDate = $_releaseDate;
                $this->cover = $_cover;
                $this->director = $_director;
            }

            public function getGenre(){ 
                return $this->genre;
            }
        }

        $movies = [
            new Movie(
                'Demon Slayer - Il treno Mugen', 
                'Animazione', 
                '17/11/2021', 
                'https://www.themoviedb.org/t/p/w600_and_h900_bestv2/kgfLM9MqLcYY7qcW4mwPM2JAU5a.jpg', 
                'Haruo Sotozaki'
            ),
            new Movie(
                'Il castello errante di Howl', 
                'Animazione',
                '09/09/2005', 
                'https://www.themoviedb.org/t/p/w600_and_h900_bestv2/q46kf8ElR1ej9tSrlNgAFMe3IAM.jpg', 
                'Hayao Miyazaki'
            ),
        ];   
    ?>

<div class="container">
    <?php foreach($movies as $movie){ ?>
        <div class="movie">
        <div class="movie-img">
            <img src="<?php echo $movie->cover?>" alt="<?php echo $movie->title?>">
        </div>
        <div class="movie-text">
            <div class="title"><h2><?php echo $movie->title?></h2></div>
            <div class="genre"><h3>Genere: </h3> <span><?php echo $movie->getGenre()?></span></div>
            <div class="release-date"><h3>Data di rilascio: </h3><span><?php echo $movie->releaseDate?></span></div>
            <div class="director"><h3>Regista: </h3> <span><?php echo $movie->director?></span></div>
        </div>
    </div>
    <?php } ?>
</div>

</body>
</html>
