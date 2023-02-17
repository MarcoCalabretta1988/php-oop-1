<?php


class Movie
{
    public $title;
    public $genre;
    public $vote;
    public $plot;

    public function __construct($title, $genre, $vote = 0, $plot)
    {
        $this->title = $title;
        $this->genre = $genre;
        $this->vote = $vote;
        $this->plot = $plot;
    }
};
