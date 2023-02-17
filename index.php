<?php


class Movie
{
    public $title;
    public $genre;
    public $vote;
    public $plot;

    public function __construct($title, $genre, $plot, $vote = 0)
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

$movie1 = new Movie('Il signore degli anelli - la compagnia dell\'anello', 'fantasy', "Il Signore degli Anelli narra della missione di nove Compagni, la Compagnia dell'Anello, partiti per distruggere il più potente Anello del Potere, un'arma che renderebbe invincibile il suo malvagio creatore Sauron se tornasse nelle sue mani, dandogli il potere di dominare tutta la Terra di Mezzo.", 5);
$movie2 = new Movie('Terminator', 'Sci-Fi', "(The Terminator) è un film del 1984 diretto da James Cameron. La trama fantascientifica, scritta da Cameron con Gale Anne Hurd, è incentrata sul personaggio del titolo, un cyborg assassino (interpretato da Arnold Schwarzenegger) inviato indietro nel tempo dal 2029 al 1984 per uccidere Sarah Connor (Linda Hamilton), il cui figlio un giorno diventerà un salvatore contro le macchine in un futuro postapocalittico", 4);

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Movie OOP</title>

    <!-- BOOTSTRAP -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">

</head>

<body>
    <div class="container">

        <table class="table my-5">
            <thead>
                <tr>
                    <th scope="col">N°</th>
                    <th scope="col">Title</th>
                    <th scope="col">Genre</th>
                    <th scope="col">Trama</th>
                    <th scope="col">Vote</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <th scope="row">1</th>
                    <td><?= $movie1->title ?></td>
                    <td><?= $movie1->genre ?></td>
                    <td><?= $movie1->plot ?></td>
                    <td><?= $movie1->vote ?></td>
                </tr>
                <tr>
                    <th scope="row">2</th>
                    <td><?= $movie2->title ?></td>
                    <td><?= $movie2->genre ?></td>
                    <td><?= $movie2->plot ?></td>
                    <td><?= $movie2->vote ?></td>
                </tr>

            </tbody>
        </table>
    </div>
</body>

</html>