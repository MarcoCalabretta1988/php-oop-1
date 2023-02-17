<?php
include_once __DIR__ . '/Genre.php';
class Movie
{
    public $title;
    public $genre;
    public $vote;
    public $plot;

    public function __construct($title, Genre $genre, $plot, $vote = 0)
    {
        $this->title = $title;
        $this->genre = $genre;
        $this->vote = $vote;
        $this->plot = $plot;
    }

    public function plotExtract($max = 0)
    {
        return $extract = substr($this->plot, 1, $max) . '...';
    }
};
