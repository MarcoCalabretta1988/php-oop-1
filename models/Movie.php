<?php
include_once __DIR__ . '/Genre.php';
class Movie
{
    public $title;
    public $genres;
    public $vote;
    public $plot;

    public function __construct($title, array $genres, $plot, $vote = 0)
    {
        $this->title = $title;
        $this->genres = $genres;
        $this->vote = $vote;
        $this->plot = $plot;
    }

    public function plotExtract($max = 0)
    {
        return $extract = substr($this->plot, 1, $max) . '...';
    }
};
