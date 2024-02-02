<?php

// initial class
class Movies
{

    // attributes
    public $name;
    public $director;
    public $actor;

    // construct
    function __construct($name, $director)
    {
        $this->name = $name;
        $this->director = $director;
    }

    // methods
    public function setActor($director)
    {
        if ($director == "Quentin Tarantino") {
            $this->actor = "Samuel L. Jackson";
        }
    }

}

// creation object 1
$movie1 = new Movies("Titanic", "James Cameron");

var_dump($movie1);
echo "<br><br>";

// creation object 2
$movie2 = new Movies("Birdman", "Alejandro González Iñárritu");

// set attribute
$movie2->actor = "Michael Keaton";

var_dump($movie2);
echo "<br><br>";


// creation object 3
$movie3 = new Movies("Pulp Fiction", "Quentin Tarantino");

var_dump($movie3);
echo "<br><br>";

// call method 
$movie3->setActor("Quentin Tarantino");

var_dump($movie3);
echo "<br><br>";