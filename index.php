<?php

include_once __DIR__ . '/db.php';
include_once __DIR__ . '/models/Movie.php';


$movies_object = [];
foreach ($movies as $movie) {
    $movie_genre = new Genre($movie['genre']);
    $add_genre = new Genre($movie['genre_add']);
    $new_movie = new Movie($movie['title'], [$movie_genre, $add_genre], $movie['plot'], $movie['vote']);
    $movies_object[] = $new_movie;
}

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
    <div class="container bg-dark rounded">

        <table class="table my-5 text-white  rounded">
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
                <?php foreach ($movies_object as $key => $movie) : ?>
                    <tr>
                        <th scope="row"><?= $key + 1 ?></th>
                        <td><?= $movie->title ?></td>
                        <td>
                            <?php foreach ($movie->genres as $genre) : ?>
                                <?= $genre->name ?>
                                <br>
                            <?php endforeach; ?>
                        </td>
                        <td><?= $movie->plot ?></td>
                        <td><?= $movie->vote ?></td>
                    </tr>
                <?php endforeach; ?>
            </tbody>
        </table>
    </div>
</body>

</html>